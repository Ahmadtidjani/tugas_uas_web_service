@extends('layout/main')

@section('title','data mahasiswa')

@section('container')
<div class="container">
    <div class="mt-5">
        <div class="card">
            <div class="card-header" style="background-color: blanchedalmond;">
                <div class="card-title" style="text-align: center;">data dosen</div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">nrp</th>
                        <th scope="col">email</th>
                        <th>jurusan</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>rpl</td>
                        <td>
                            <a href="">edit</a>
                            <a href="">hapus</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection