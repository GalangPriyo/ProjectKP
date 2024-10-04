@extends('layouts.layout')
@section('title', 'Desa ' . $desa->nama_desa . ' - Peraturan Desa ' . $peraturandesa->judul)

@section('styles')
<meta name="description" content="Peraturan Desa {{ $peraturandesa->judul }} Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}.">

<style>
    .animate-up:hover {
        top: -5px;
    }
</style>
@endsection

@section('header')
<h2 class="text-white text-sm text-muted">PERATURAN DESA</h2>
<h1 class="text-white">{{ $peraturandesa->judul }}</h1>
@endsection

@section('content')
<!-- @if ($peraturandesa->gambar)
<div class="row mb-5">
    <div class="col-md text-center">
        <img class="mw-100" style="max-height: 300px; object-fit: contain;" src="{{ url(Storage::url($peraturandesa->gambar)) }}" alt="Gambar Peraturan Desa {{ $peraturandesa->judul }}">
    </div>
</div>
@endif -->

@if ($peraturandesa->file_lampiran)
<div class="card col-md-4 col-sm-6 mx-auto">
    <div class="card-body text-center">
        <h4>Lampiran File Peraturan Desa</h4>
        <h4>" {{ $peraturandesa->judul }} "</h4>
        <a href="{{ url(Storage::url($peraturandesa->file_lampiran)) }}" target="_blank" class="btn btn-primary mt-2">
            <i class="fas fa-download"></i> Unduh PDF
        </a>
    </div>
</div>
@endif


<div class="card mt-4">
    <div class="card-body">
        {!! $peraturandesa->konten !!}
    </div>
</div>

@if ($peraturandesas->count() > 0)
<h2 class="text-lead text-white text-center mt-5">Peraturan Desa Lainnya</h2>
@endif
<div class="row justify-content-center mt-3">
    @foreach ($peraturandesas as $item)
    <div class="col-lg-4 col-md-6 mb-3">
        <div class="card animate-up">
            @if ($item->gambar)
            <!-- <a href="{{ route('peraturandesa.show', ['peraturandesa' => $item, 'slug' => Str::slug($item->judul)]) }}">
                <div class="card-img" style="background-image: url('{{ url(Storage::url($item->gambar)) }}'); background-size: cover; height: 200px;">
                </div>
            </a> -->
            @endif
            <div class="card-body text-center">
                <a href="{{ route('peraturandesa.show', ['peraturandesa' => $item, 'slug' => Str::slug($item->judul)]) }}">
                    <h3>{{ $item->judul }}</h3>
                    <p class="text-sm text-muted"><i class="fas fa-clock-o"></i> {{ $item->created_at->diffForHumans() }}</p>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection