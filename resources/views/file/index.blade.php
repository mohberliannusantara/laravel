@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="py-2">
                        <a class="btn btn-primary btn-sm" href="/file/create">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Telepon</th>
                            <th>Gender</th>
                            <th>Foto</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($result as $data)
                        <tr>
                            <td>{{ $data['1'] }}</td>
                            <td>{{ $data['2'] }}</td>
                            <td>{{ $data['3'] }}</td>
                            <td>{{ $data['4'] }}</td>
                            {{-- <td>{{ $data["<img id='" . $data[5] . "' src='./assets/file/" . $data[5] . "'height='150' width='150'>"]}}</td> --}}
                            <td><img src='./assets/files/" . {{ $data[5] }} . "'height='150' width='150'></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/admin/edit/{{ $data['0'] }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/admin/delete/{{ $data['0'] }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection