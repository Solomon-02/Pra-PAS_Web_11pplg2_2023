@extends('layouts.main')

@section('container')
<h1>Data Ortu</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($parents as $parent)
    <tr>
      <td>{{$parent["nis"]}}</td>
      <td>{{$parent["nama"]}}</td>
      <td>
      <a href="/parents/detail/{{ $parent->id }}" type="button" class="btn btn-outline-info">Detail</a>
        <button class="btn btn-warning">Edit</button>
        <button class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
