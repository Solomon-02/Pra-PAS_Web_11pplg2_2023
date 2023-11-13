@extends('layouts.main')

@section('container')
<h1>Data Siswa</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student["nis"]}}</td>
      <td>{{$student["nama"]}}</td>
      <td>{{$student["kelas"]}}</td>
      <td>
      <a href="/students/detail/{{ $student->id }}" type="button" class="btn btn-outline-info">Detail</a>
        <button class="btn btn-warning">Edit</button>
        <button class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection