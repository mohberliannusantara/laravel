@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="py-2">
                        <a class="btn btn-primary btn-sm" href="/admin/create">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($users as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/admin/edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/admin/delete/{{ $data->id }}">Hapus</a>
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