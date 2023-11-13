@extends('layouts.main')

@section('container')
    <h2>Detail Ortu</h2>
    <ul>
        <li>NIS: {{ $parent->nis }}</li>
        <li>Nama: {{ $parent->nama }}</li>
        <li>Tanggal Lahir: {{ $parent->tanggal_lahir }}</li>
        <li>Alamat: {{ $parent->alamat }}</li>
    </ul>

    <a href="/parents/all">Kembali</a>
@endsection
