<?php

namespace App\Http\Controllers;

use App\Event;
use App\Desa;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $event = Event::orderBy('id', 'desc')->paginate(12);

        if ($request->cari) {
            $event = Event::where('judul', 'like', "%{$request->cari}%")
                ->orWhere('konten', 'like', "%{$request->cari}%")
                ->orderBy('id', 'desc')->paginate(12);
        }

        $event->appends($request->only('cari'));
        return view('event.index', compact('event'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event(Request $request)
    {
        $event = Event::orderBy('id', 'desc')->paginate(12);
        $desa = Desa::find(1);

        if ($request->cari) {
            $event = Event::where('judul', 'like', "%{$request->cari}%")
                ->orWhere('konten', 'like', "%{$request->cari}%")
                ->orderBy('id', 'desc')->paginate(12);
        }

        $event->appends($request->only('cari'));
        return view('event.event', compact('event', 'desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'judul'     => ['required', 'string', 'max:191'],
            'konten'    => ['required'],
            'gambar'    => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->gambar) {
            $data['gambar'] = $request->gambar->store('public/gallery');
        }

        Event::create($data);

        return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event, $slug)
    {
        $desa = Desa::find(1);
        $events = Event::where('id', '!=', $event->id)->inRandomOrder()->limit(3)->get();
        if ($slug != Str::slug($event->judul)) {
            return abort(404);
        }
        $event->update(['dilihat' => $event->dilihat + 1]);
        return view('event.show', compact('event', 'desa', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $beritum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'judul'     => ['required', 'string', 'max:191'],
            'konten'    => ['required'],
            'gambar'    => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->gambar) {
            if ($event->gambar) {
                File::delete(storage_path('app/' . $event->gambar));
            }
            $data['gambar'] = $request->gambar->store('public/gallery');
        }

        $event->update($data);

        return back()->with('success', 'Event berhasil diperbarui');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('success', 'Event berhasil dihapus');
    }
}
