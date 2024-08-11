@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin/admin-form.css">
@endsection

@section('content')
    <form class="form-container" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Tambah Data UMKM</h1>
        <div class="form-group">
            <label for="name">Nama</label>
            <input autofocus value="{{old('name')}}" placeholder="Masukkan nama produk" type="text" id="name" name="name">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="seller">Pemilik</label>
            <input value="{{old('seller')}}" placeholder="Masukkan nama penjual" type="text" id="seller" name="seller">
            @error('seller')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <div class="preview-img">
                <img
                    src="/img/product/default.jpg">
            </div>
            <input type="file" id="gambar" name="gambar">
            @error('gambar')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input value="{{old('price')}}" placeholder="Masukkan harga produk" type="number" id="price" name="price">
            @error('price')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="detail">Detail</label>
            <textarea placeholder="Masukkan detail produk" name="detail" id="detail">{{old('detail')}}</textarea>
            @error('detail')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="contact">Nomor telepon</label>
            <input value="{{old('contact')}}" placeholder="Masukkan nomor telepon (diawali dengan 0)" type="number" id="contact" name="contact">
            @error('contact')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input value="{{old('address')}}" placeholder="Masukkan alamat" type="text" id="address" name="address">
            @error('address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <button>Simpan</button>
        </div>
    </form>
@endsection

@section('script')
    <script>
        const gambar = document.getElementById('gambar');
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
