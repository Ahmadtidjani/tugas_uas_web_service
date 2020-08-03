@extends('layout/main')

@section('title')

@section('container')

<body style="background-color: teal;">
    <div class="col-md-6">
        <div class="mt-5">
            <div class="card">
                <div class="card-header" style="background-color: darkslategrey;">
                    <h3 class="card-title text-light" style="text-align: center;">Form Tambah Data</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-6">
                            <form method="POST" action="/api/students" encytpe="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="">nama</label>
                                    <input type="text" class="form-control" id="nama" required placeholder="masukan nama" name="nama" value="{{old('nama')}}">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">nim</label>
                                    <input type="text" class="form-control" id="nim" placeholder="masukan nim" name="nim" value="{{old('nim')}}">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="text" class="form-control   " id="email" placeholder="masukan email" name="email" value="{{old('email')}}">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">no_tlfn</label>
                                    <input type="text" class="form-control   " id="no_tlfn" placeholder="masukan no_tlfn" name="no_tlfn" value="{{old('no_tlfn')}}">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">alamat</label>
                                <input type="text" class="form-control   " id="alamat" placeholder="masukan alamat" name="alamat" value="{{old('alamat')}}">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">jurusan</label>
                                <input type="text" class="form-control " id="jurusan" placeholder="masukan jurusan" name="jurusan" value="{{old('jurusan')}}">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">angkatan</label>
                                <input type="text" class="form-control " id="angkatan" placeholder="masukan angkatan" name="angkatan" value="{{old('angkatan')}}">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah data!!</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</div>
@endsection