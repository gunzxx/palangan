@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin.css">
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
    
    <section id="katalog">
        <h1>Manajemen Produk UMKM Desa Palangan</h1>
        <div class="action-admin-container">
            <a href="/admin/product/create" class="create-btn">
                <i class="fa-solid fa-plus"></i>
                Tambah
            </a>
        </div>
        <table class="katalogs">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Pemilik</th>
                    <th class="detail-col">Detail</th>
                    <th>Nomor Telepon</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <div class="img-product">
                                <img
                                    src="{{ $product->getFirstMediaUrl('preview') == '' ? '/img/product/default.jpg' : $product->getFirstMediaUrl('preview') }}">
                            </div>
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->seller }}</td>
                        <td>
                            <div class="elipsis-text">
                                {{ $product->detail }}
                            </div>
                        </td>
                        <td>{{ $product->contact }}</td>
                        <td>Rp. {{ number_format($product->price, 2, ',', '.') }}</td>
                        <td>
                            <div class="action-container">
                                <a href="/admin/product/{{ $product->id }}/edit" class="edit-btn">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <i class="fa-solid fa-trash delete-btn" data-id="{{ $product->id }}"></i>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection


@section('script')
    <script>
        const deletes = document.querySelectorAll('.delete-btn');
        deletes.forEach(deleteBtn => {
            deleteBtn.addEventListener('click', function(event) {
                const id = this.getAttribute('data-id');
                const token = getCookie('jwt-token');
                Swal.fire({
                    text: "Hapus data UMKM?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: 'red',
                    confirmButtonText: 'Oke',
                }).then(answ => {
                    if (answ.isConfirmed) {
                        axios.delete(`/api/admin/${id}/delete`, {
                            headers: {
                                Authorization: `Bearer ${token}`,
                            },
                        }).then(res => {
                            if (res.status == 200) {
                                console.log(res.data.message);
                                Swal.fire({
                                    icon: "success",
                                    text: res.data.message,
                                });
                            }
                        }).catch(err => {
                            console.log(err);
                            Swal.fire({
                                icon: "error",
                                text: err.message,
                            });
                        });
                    }
                });
            });
        });
    </script>
@endsection
