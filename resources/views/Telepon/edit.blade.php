@extends('layouts.template')

@section('content')

<div class="d-flex justify-content-start mt-5">
  <div class="col-md-4">
    <h2 class="mt-5 mb-2">BUKU TELEPON</h2>
    <h5 class="mb-5">EDIT TELEPON</h5>
    <form action="/update-data/{{ $dataTelepon->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-floating mb-3">
        <input type="text" name="nama" class="form-control" id="nama" placeholder="{{ $dataTelepon->nama }}" value="{{ $dataTelepon->nama }}">
        <label for="nama">NAMA</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" name="nomor" class="form-control" id="nomor" placeholder="{{ $dataTelepon->nomor }}" value="{{ $dataTelepon->nomor }}">
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