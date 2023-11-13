@extends('layouts.main')

@section('container')
    <h2>Detail Siswa</h2>
    <ul>
        <li>NIS: {{ $student->nis }}</li>
        <li>Nama: {{ $student->nama }}</li>
        <li>Tanggal Lahir: {{ $student->tanggal_lahir }}</li>
        <li>Kelas: {{ $student->kelas }}</li>
        <li>Alamat: {{ $student->alamat }}</li>
    </ul>

    <a href="/students/all">Kembali</a>
@endsection
