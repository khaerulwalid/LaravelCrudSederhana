@extends('layout.layout');

@section('content')
        <h2 class="text-center">Ubah data siswa</h2>
        <hr class="mb-3">
    <div class="container border">
    
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="/student/{{ $student->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" id="nis" value="{{ @old('nis', $student->nis) }}">

                        <input type="hidden" name="id" class="form-control" id="id" value="{{ $student->id }}">
                    </div>

                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" class="@error('nis') is-invalid @enderror form-control" id="nama" value="{{ @old('nama', $student->nama) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <select class="@error('jeniskelamin') is-invalid @enderror form-select" aria-label="Default select example" name="jeniskelamin" id="jeniskelamin">
                            @if($student->jeniskelamin == "Laki-laki")
                                <option value="{{ $student->jeniskelamin }}">{{ $student->jeniskelamin }}</option>
                                <option value="Perempuan">Perempuan</option>
                            @else
                                <option value="{{ $student->jeniskelamin }}">{{ $student->jeniskelamin }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                            @endif

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="notelp" class="form-label">No Telpon</label>
                        <input type="number" name="notelp" class="@error('notelp') is-invalid @enderror form-control" id="notelp" value="{{ @old('notelp', $student->notelp) }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" id="email" value="{{ @old('email', $student->email) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection