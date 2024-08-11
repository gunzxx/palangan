@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin/admin-form.css">
@endsection

@section('content')
    <form class="form-container" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Tambah Berita</h1>
        <div class="form-group">
            <label for="title">Judul</label>
            <input value="{{old('title')}}" placeholder="Masukkan judul berita" type="text" id="title" name="title">
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="hero">Gambar</label>
            <div class="preview-img">
                <img
                    src="/img/product/default.jpg">
            </div>
            <input type="file" id="hero" name="hero">
            @error('hero')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Isi</label>
            <textarea placeholder="Masukkan isi berita" name="body" id="body">{{old('body')}}</textarea>
            @error('body')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <a class="cancel-btn" href="/admin/berita">Batal</a>
            <button>Simpan</button>
        </div>
    </form>
@endsection

@section('script')
    <script>
        CKEDITOR.replace('body');
        
        const gambar = document.getElementById('hero');
        const preview = document.querySelector('.preview-img img');
        const oldImg = preview.src;

        gambar.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = oldImg;
            }
        });
    </script>
@endsection