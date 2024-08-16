@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin/admin.css">
    <link rel="stylesheet" href="/style/admin/admin-form.css">
    <link rel="stylesheet" href="/mobile/admin.css">
@endsection

@section('content')
    <section id="admin-menu">
        <form class="form-container" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Profil</h1>
            <div class="form-group">
                <div class="img-preview">
                    <img src="{{auth()->user()->getFirstMediaUrl('profile') == '' ? '/img/profile/default.png' : auth()->user()->getFirstMediaUrl('profile')}}">
                </div>
                <input type="file" accept="image/*" name="profileImg" id="profileImg">
            </div>
            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" value="{{old('name', auth()->user()->name)}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{old('email', auth()->user()->email)}}" required>
            </div>
            <div class="form-group">
                <button>simpan</button>
            </div>
        </form>
        <form class="form-container" method="POST" action="/admin/password">
            @csrf
            <h1>Ganti Password</h1>
            <div class="form-group">
                <label for="password">Password baru</label>
                <input id="password" type="password" name="password" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button>simpan</button>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script>
        const gambar = document.getElementById('profileImg');
        const preview = document.querySelector('.img-preview img');
        const oldImg = preview.src;

        gambar.addEventListener('change', function(event) {
            console.log('oke');
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
    @if (session('success'))
        <input type="hidden" value="{{session('success')}}" id="msgSuccess">
        <script>
            const message = document.getElementById('msgSuccess').value;
            Swal.fire({
                title: message,
                icon: 'success'
            });
        </script>
    @endif
@endsection