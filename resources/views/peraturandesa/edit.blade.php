@extends('layouts.app')

@section('title', 'Edit Peraturan Desa')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    .ikon {
        font-family: fontAwesome;
    }

    .upload-image:hover {
        cursor: pointer;
        opacity: 0.7;
    }
</style>
@endsection

@section('content-header')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-header border-0">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                            <div class="mb-3">
                                <h2 class="mb-0">Edit Peraturan Desa</h2>
                                <p class="mb-0 text-sm">Kelola Peraturan Desa</p>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('peraturandesa.index') }}" class="btn btn-success" title="Kembali"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@include('layouts.components.alert')
<div class="row">
    <div class="col">
        <div class="card bg-secondary shadow h-100">
            <div class="card-header bg-white border-0">
                <h3 class="mb-0">Edit Peraturan Desa</h3>
            </div>
            <div class="card-body">
                <form autocomplete="off" action="{{ route('peraturandesa.update', ['peraturandesa' => $peraturandesa->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf @method('patch')
                    <!-- <div class=" form-group">
                        <label class="form-control-label">Gambar</label>
                        <div class="text-center">
                            <img title="Klik untuk ganti gambar" onclick="$(this).siblings('.images').click()" class="mw-100 upload-image" style="max-height: 300px" src="{{ $peraturandesa->gambar ? asset(Storage::url($peraturandesa->gambar)) : asset('storage/upload.jpg') }}" alt="Gambar peraturan desa {{ $peraturandesa->judul }}">
                            <input accept="image/*" onchange="uploadImage(this)" type="file" name="gambar" class="images" style="display: none">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="form-control-label">Judul</label>
                        <input class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul ..." value="{{ old('judul', $peraturandesa->judul) }}">
                        @error('judul') <span class="invalid-feedback font-weight-bold">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">File Peraturan Desa</label>
                        @if ($peraturandesa->file_lampiran)
                        <p>File saat ini: <a href="{{ asset(Storage::url($peraturandesa->file_lampiran)) }}" target="_blank">{{ $peraturandesa->file_lampiran }}</a></p>
                        @endif
                        <input class="form-control @error('file_lampiran') is-invalid @enderror" type="file" name="file_lampiran" accept="application/pdf">
                        @error('file_lampiran') <span class="invalid-feedback font-weight-bold">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Konten</label>
                        <textarea class="form-control @error('konten') is-invalid @enderror" name="konten">{{ old('konten', $peraturandesa->konten) }}</textarea>
                        @error('konten') <span class="invalid-feedback font-weight-bold">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="simpan">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    function uploadImage(inputFile) {
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(inputFile).siblings('img').attr("src", e.target.result);
            }
            reader.readAsDataURL(inputFile.files[0]);
        }
    }

    $(document).ready(function() {
        $("textarea").summernote({
            dialogsInBody: true,
            placeholder: 'Silahkan isi konten',
            tabsize: 2,
            height: 300
        });
    });
</script>
@endpush