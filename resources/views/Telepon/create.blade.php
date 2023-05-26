@extends('layouts.template')

@section('content')

<div class="d-flex justify-content-start mt-5">
  <div class="col-md-4">
    <h2 class="mt-5 mb-2">BUKU TELEPON</h2>
    <h5 class="mb-5">TAMBAH TELEPON</h5>
    <form action="/store-data" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
        <label for="nama">NAMA</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" name="nomor" class="form-control" id="nomor" placeholder="Nomor">
        <label for="nomor">NOMOR</label>
      </div>
      <div>
        <button type="submit" class="btn btn-secondary">SIMPAN</button>
        <a href="/" class="btn btn-secondary">KEMBALI</a>
      </div>
    </form>
  </div>
</div>

@endsection