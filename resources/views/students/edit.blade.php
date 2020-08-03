@extends('layout/main')

@section('title','')

@section('container')

<body style="background-color: teal;">
    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header" style="background-color: darkslategray;">
                    <h3 class="card-title text-light" style="text-align: center;">Form Ubah Data</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="POST" action="/api/students/{{$student->id}}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="text" class="form-control " name="nama" id="nama" value="{{$student->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="nim">nim</label>
                                    <input type="text" class="form-control" name="nim" id="nim" value="{{$student->nim}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="no_tlfn">no_tlfn</label>
                                    <input type="text" class="form-control" name="no_tlfn" id="no_tlfn" value="{{$student->no_tlfn}}">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{$student->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{$student->jurusan}}">
                            </div>
                            <div class="form-group">
                                <label for="angkatan">angkatan</label>
                                <input type="text" class="form-control" name="angkatan" id="angkatan" value="{{$student->angkatan}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Data!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection