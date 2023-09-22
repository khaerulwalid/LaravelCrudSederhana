@extends('layout.layout');

@section('content')
        <h2 class="text-center">Tambah data siswa</h2>
        
        <hr class="mb-3">
    <div class="container border">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="/student" class="btn btn-primary text-light  my-3">Semua Data</a>
            </div>
        </div>
        
        <div class="row justify-content-center">
            
            <div class="col-md-4">
                <form action="/student" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="text" name="nis" class="@error('nis') is-invalid @enderror form-control" id="nis" value="{{ @old('nis') }}">
                        @error('nis')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    

                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" class="@error('nama') is-invalid @enderror form-control" id="nama" value="{{ @old('nama') }}">
                      @error('nama')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                     @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <select class="@error('jeniskelamin') is-invalid @enderror form-select" aria-label="Default select example" name="jeniskelamin" id="jeniskelamin" value="{{ @old('jeniskelamin') }}">
                            <option selected>-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jeniskelamin')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="notelp" class="form-label">No Telpon</label>
                        <input type="number" name="notelp" class="@error('notelp') is-invalid @enderror form-control" id="notelp" value="{{ @old('notelp') }}">
                        @error('notelp')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" id="email" value="{{ @old('email') }}">
                        @error('email')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload Gambar</label>
                        <input type="file" name="photo" class="form-control" id="inputGroupFile01">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection