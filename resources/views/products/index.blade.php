@extends('products.layouts')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-10">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Daftar Produk</h3>
                <div class="float-end">
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th> <!-- Kolom ID -->
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td> <!-- Tampilkan ID produk -->
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <!-- Tombol Delete dihapus -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection