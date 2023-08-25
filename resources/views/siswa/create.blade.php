@extends('layouts.app')

@section('content')
    <h2>Tambah Siswa</h2>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
        </div>

        <div>
            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur">
        </div>

        <div>
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan">
        </div>

        <button type="submit">Tambah</button>
    </form>
@endsection
