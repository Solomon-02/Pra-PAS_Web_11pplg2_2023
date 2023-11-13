@extends('layouts.main')

@section('container')
    <h3>{{ $nama }}</h3>
    <h4>{{ $kelas }}</h4>
    <img src="{{ $image }}" alt="" width="200px">
@endsection