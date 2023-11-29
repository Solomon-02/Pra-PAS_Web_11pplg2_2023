@extends('layouts.main')

@section('container')
<h1>Data Guru</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teachers as $teacher)
    <tr>
      <td>{{$teacher["nis"]}}</td>
      <td>{{$teacher["nama"]}}</td>
      <td>
      <a href="/teachers/detail/{{ $teacher->id }}" type="button" class="btn btn-outline-info">Detail</a>
        <button class="btn btn-warning">Edit</button>
        <button class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
