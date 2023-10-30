@extends('layouts.index')
@section('konten')
<div class="mb-3">
    <a href="{{ route('barang.create') }}" class="btn btn-primary">
       Tambah Barang
      </a>
</div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($data as $item)
    <tr>
        <th>{{ $loop->iteration }}</th>
        <th>{{ $item->nama_barang }}</th>
        <th>{{ $item->harga_barang }}</th>
        <th>{{ $item->jumlah_barang }}</th>
        <th>
            <a href="{{ route('barang.edit', $item->id_barang) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('barang.destroy', $item->id_barang) }}" class="d-inline" method="POST">
                <button type="submit" class="btn btn-danger">Hapus</button>
            @method('delete')
            @csrf
            </form>
        </th>
      </tr>
    @endforeach
</table>
@endsection