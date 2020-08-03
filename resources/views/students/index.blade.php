@extends('layout/main')

@section('title')

@section('container')

<body style="background-color: teal;">
    <div class="container">
        <div class="mt-5">
            <a href="/api/students/create" class="btn btn-primary my-3">Tambahkan Data</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header" style="background-color: darkslategrey;">
                    <h3 class="card-title text-light" style="text-align: center;">Data Mahasiswa</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">nama</th>
                            <th scope="col">nim</th>
                            <th scope="col">email</th>
                            <!-- <th scope="col">no_tlfn</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Angkatan</th> -->
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $students as $student )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $student->nama}}</td>
                            <td>{{ $student->nim}}</td>
                            <td>{{ $student->email}}</td>
                            <!-- <td>{{ $student->no_tlfn}}</td>
                        <td>{{ $student->alamat}}</td>
                        <td>{{ $student->jurusan}}</td>
                        <td>{{ $student->angkatan}}</td> -->

                            <td>
                                <a href="/api/students/{{$student->id}}" class="badge badge-primary badge-pill">detail</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>
</body>

@endsection