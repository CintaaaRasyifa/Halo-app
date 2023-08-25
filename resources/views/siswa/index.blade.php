@extends('layouts.app')

@section('content')
    <h1>Daftar Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->umur }}</td>
                    <td>{{ $s->jurusan }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
