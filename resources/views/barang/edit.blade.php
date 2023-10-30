@extends('layouts.index')
@section('konten')
<h2 align="center" style="font: bold">TAMBAH DATA BARANG</h2>
<form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
    @method('put')
@csrf
    <div class="mb-3">
        <label for="basic-url" class="form-label">Nama Barang</label>
        <div class="col-md-6">
          <input type="text" value="{{ $barang->nama_barang }}" name="nama_barang" class="form-control" id="basic-url">
        </div>
      </div>
    <div class="mb-3">
        <label for="basic-url" class="form-label">Harga Barang</label>
        <div class="col-md-6">
          <input type="number" value="{{ $barang->harga_barang }}" name="harga_barang" class="form-control" id="basic-url">
        </div>
        </div>
    <div class="mb-3">
        <label for="basic-url" class="form-label">Jumlah Barang</label>
        <div class="col-md-6">
          <input type="number" value="{{ $barang->jumlah_barang }}" name="jumlah_barang" class="form-control" id="basic-url">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
@endsection