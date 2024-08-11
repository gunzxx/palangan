@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin/admin.css">
    <link rel="stylesheet" href="/style/berita.css">
@endsection

@section('content')
    @session('success')
    <input type="hidden" id="success" value="{{ session('success') }}">
    <script>
        const alertText = document.getElementById('success').value;
        Swal.fire({
            icon: 'success',
            text: alertText,
        });
    </script>
    @endsession

    @session('error')
    <input type="hidden" id="error" value="{{ session('error') }}">
    <script>
        const alertText = document.getElementById('error').value;
        Swal.fire({
            icon: 'error',
            text: alertText,
        });
    </script>
    @endsession

    <section id="berita">
        <h1>Manajemen Berita KUMPALA</h1>
        <div class="action-admin-container">
            <a href="/admin/berita/create" class="create-btn">
                <i class="fa-solid fa-plus"></i>
                Tambah
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th class="number">No.</th>
                    <th>Judul</th>
                    <th class="action-col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $key => $berita)
                    <tr>
                        <td>{{$key +1}}</td>
                        <td>{{$berita->title}}</td>
                        <td>
                            <div class="action-container">
                                <a href="/admin/berita/{{ $berita->id }}/edit" class="edit-btn">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <i class="fa-solid fa-trash delete-btn" data-id="{{ $berita->id }}"></i>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection