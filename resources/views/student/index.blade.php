@extends('layout.layout')

@section('content')
<h2 class="text-center mb-4">Data Siswa</h2>
<div class="container">
    <a href="/student/create" class="btn btn-primary text-light">Tambah Data Siswa + </a>
    @if(session()->has('success'))
      <div class="alert alert-primary mt-2" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
                <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td>{{ $student->nis }}</td>
                  <td>{{ $student->nama }}</td>
                  <td>{{ $student->jeniskelamin }}</td>
                  <td>{{ $student->notelp }}</td>
                  <td>{{ $student->email }}</td>
                  <td>
                      <a href="/student/{{ $student->id }}" class="btn btn-warning">Edit</a>
                      <a href="/studentdelete/{{ $student->id }}" onclick="return confirm('Yakin hapus data ?')" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection