@extends('layout.layout');

@section('content')
        <h2 class="text-center">Tambah data siswa</h2>
        <hr class="mb-3">
    <div class="container border">
    
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="/student" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="text" name="nis" class="form-control" id="nis">
                    </div>

                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jeniskelamin" id="jeniskelamin">
                            <option selected>-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="notelp" class="form-label">No Telpon</label>
                        <input type="number" name="notelp" class="form-control" id="notelp">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection