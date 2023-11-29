@extends('layouts.main')

@section('container')
    <h2>Detail Guru</h2>
    <ul>
        <li>NIS: {{ $teacher->nis }}</li>
        <li>Nama: {{ $teacher->nama }}</li>
        <li>Tanggal Lahir: {{ $teacher->tanggal_lahir }}</li>
        <li>Alamat: {{ $teacher->alamat }}</li>
    </ul>

    <a href="/teachers/all">Kembali</a>
@endsection
