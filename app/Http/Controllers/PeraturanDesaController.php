<?php

namespace App\Http\Controllers;

use App\PeraturanDesa;
use App\Desa;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PeraturanDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peraturandesa = PeraturanDesa::orderBy('id', 'desc')->paginate(12);

        if ($request->cari) {
            $peraturandesa = PeraturanDesa::where('judul', 'like', "%{$request->cari}%")
                ->orWhere('konten', 'like', "%{$request->cari}%")
                ->orderBy('id', 'desc')->paginate(12);
        }

        $peraturandesa->appends($request->only('cari'));
        return view('peraturandesa.index', compact('peraturandesa'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function peraturandesa(Request $request)
    {
        $peraturandesa = PeraturanDesa::orderBy('id', 'desc')->paginate(12);
        $desa = Desa::find(1);

        if ($request->cari) {
            $peraturandesa = PeraturanDesa::where('judul', 'like', "%{$request->cari}%")
                ->orWhere('konten', 'like', "%{$request->cari}%")
                ->orderBy('id', 'desc')->paginate(12);
        }

        $peraturandesa->appends($request->only('cari'));
        return view('peraturandesa.peraturandesa', compact('peraturandesa', 'desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peraturandesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'        => ['required', 'string', 'max:191'],
            'konten'       => ['required'],
            'gambar'       => ['nullable', 'image', 'max:2048'],
            'file_lampiran' => ['nullable', 'file', 'mimes:pdf', 'max:10240'],
        ]);

        if ($request->gambar) {
            $data['gambar'] = $request->gambar->store('public/gallery');
        }

        if ($request->file_lampiran) {
            $data['file_lampiran'] = $request->file_lampiran->store('public/lampiran');
        }

        PeraturanDesa::create($data);

        return redirect()->route('peraturandesa.index')->with('success', 'Peraturan Desa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PeraturanDesa  $peraturandesa
     * @return \Illuminate\Http\Response
     */
    public function show(PeraturanDesa $peraturandesa, $slug)
    {
        $desa = Desa::find(1);
        $peraturandesas = PeraturanDesa::where('id', '!=', $peraturandesa->id)->inRandomOrder()->limit(3)->get();
        if ($slug != Str::slug($peraturandesa->judul)) {
            return abort(404);
        }
        $peraturandesa->update(['dilihat' => $peraturandesa->dilihat + 1]);
        return view('peraturandesa.show', compact('peraturandesa', 'desa', 'peraturandesas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PeraturanDesa  $peraturandesa
     * @return \Illuminate\Http\Response
     */
    public function edit(PeraturanDesa $peraturandesa)
    {
        return view('peraturandesa.edit', compact('peraturandesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PeraturanDesa  $beritum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeraturanDesa $peraturandesa)
    {
        $data = $request->validate([
            'judul'        => ['required', 'string', 'max:191'],
            'konten'       => ['required'],
            'gambar'       => ['nullable', 'image', 'max:2048'],
            'file_lampiran' => ['nullable', 'file', 'mimes:pdf', 'max:10240'],
        ]);

        // Mengelola gambar
        if ($request->gambar) {
            if ($peraturandesa->gambar) {
                File::delete(storage_path('app/' . $peraturandesa->gambar));
            }
            $data['gambar'] = $request->gambar->store('public/gallery');
        } else {
            $data['gambar'] = $peraturandesa->gambar;
        }

        // Mengelola file lampiran
        if ($request->file_lampiran) {
            if ($peraturandesa->file_lampiran) {
                File::delete(storage_path('app/' . $peraturandesa->file_lampiran));
            }
            $data['file_lampiran'] = $request->file_lampiran->store('public/lampiran');
        } else {
            $data['file_lampiran'] = $peraturandesa->file_lampiran;
        }

        $peraturandesa->update($data);

        return back()->with('success', 'Peraturan Desa berhasil diperbarui');
    }



    public function destroy(PeraturanDesa $peraturandesa)
    {
        $peraturandesa->delete();
        return back()->with('success', 'Peraturan Desa berhasil dihapus');
    }
}
