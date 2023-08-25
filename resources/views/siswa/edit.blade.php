@extends('layouts.app')

@section('content')
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}">
        <br>
        <label>Umur:</label>
        <input type="number" name="umur" value="{{ $siswa->umur }}">
        <br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="{{ $siswa->jurusan }}">
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
