@extends('layouts.index')
@section('konten')
<h2 align="center" style="font: bold">TAMBAH TRANSAKSI</h2>
<form action="{{ route('transaksi.store') }}" method="POST">
@csrf
    <div class="mb-3">
        <label for="basic-url" class="form-label">Nama Barang</label>
        <div class="col-md-6">
            <select class="form-select" name="id_barang" aria-label="Default select example">
                <option selected>Pilih Barang</option>
               @foreach ($barang as $item)
                   <option value="{{ $item->id_barang }}">{{ $item->nama_barang }}</option>
               @endforeach
            </select>
        </div>
    </div>
        
        <div class="mb-3">
            <label for="basic-url" class="form-label">Jumlah Beli</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="jumlah_beli" id="jumlah_beli" min="1" placeholder="Masukan Jumlah Barang">
            </div>
        </div>
        
        <div class="mb-3">
            <label for="basic-url" class="form-label">Jumlah Bayar</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar" min="1" readonly>
            </div>
            </div>

    <div class="mb-3">
        <label for="basic-url" class="form-label">Stok Barang</label>
        <div class="col-md-6">
            <input type="number" class="form-control" value="{{ $item->jumlah_barang }}"  name="stok_barang" id="stok_barang" min="1" readonly>
        </div>
        </div>
    <div class="mb-3">
        <label for="basic-url" class="form-label">Keterangan</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="keterangan" id="keterangan" min="1" placeholder="Keterangan Transaksi">
        </div>
        </div>
    
    
        <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>

@endsection