@extends('layout/main')

@section('title')

@section('container')

<body style="background-color: teal;">
    <div class="col-md-6">
        <div class="container">
            <div class="mt-5">
                <div class="card">
                    <div class="card-header" style="background-color: darkslategrey;">
                        <h3 class="card-title text-light" style="text-align: center;">Detail Mahasiswa</h3>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="card-body">
                                    <p class="card-text">Nama: {{$student->nama}}</p>
                                    <p class="card-text">Nim: {{$student->nim}}</p>
                                    <p class="card-text">Email :{{$student->email}}</p>
                                    <p class="card-text">No.telfon : {{$student->no_tlfn}}</p>
                                    <p class="card-text">Alamat : {{$student->alamat}}</p>
                                    <p class="card-text">Jurusan : {{$student->jurusan}}</p>
                                    <p class="card-text">Angkatan : {{$student->angkatan}}</p>
                                    <a href="{{$student->id}}/edit" class="btn btn-primary">edit</a>
                                    <form action="/{{$student->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">hapus</button>
                                    </form>
                                    <a href="/api/students">kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</body>

@endsection