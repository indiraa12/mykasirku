@extends('layouts.index')
@section('konten')
<div class="mb-3">
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">
       Tambah Transaksi
      </a>
</div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nama Barang</th>
        <th scope="col">Tanggal Transaksi</th>
        <th scope="col">Jumlah Beli</th>
        <th scope="col">Jumlah Bayar</th>
        <th scope="col">Stok Barang</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($data as $item)
    <tr>
        <th>{{ $item->barang->nama_barang }}</th>
        <th>{{ $item->created_at->translatedFormat('d, M Y') }}</th>
        <th>{{ $item->jumlah_beli }}</th>
        <th>{{ $item->jumlah_bayar }}</th>
        <th>{{ $item->barang->jumlah_barang }}</th>
        <th>{{ $item->keterangan }}</th>
        <th>
            <form action="{{ route('transaksi.destroy', $item->id_transaksi) }}" class="d-inline" method="POST">
                <button type="submit" class="btn btn-danger">Hapus</button>
            @method('delete')
            @csrf
            </form>
        </th>
      </tr>
    @endforeach
</table>
@endsection