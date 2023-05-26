@extends('layouts.template')

@section('content')
    <h2 class="my-5">BUKU TELEPON</h2>
    <a href="/tambah-data" class="btn btn-outline-secondary mb-3">TAMBAH DATA</a>
    <table class="table table-secondary table-striped">
        <tr>
            <th>NAMA</th>
            <th>NOMOR TELEPON</th>
            <th>AKSI</th>
        </tr>
        
        @forelse ($dataTelepon as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nomor }}</td>
            <td>
                <form action="/delete-data/{{ $item->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="edit-data/{{ $item->id }}" class="btn btn-secondary">EDIT</a>
                    <button type="submit" class="btn btn-secondary" onclick="return confirm('Hapus Data Telepon?')">HAPUS</button>
            </form>
            </td>
        @empty
            <h3 class="d-flex justify-content-center">Tidak Ada data telepon</h3>
            
        </tr>
        @endforelse
    </table>

    
@endsection