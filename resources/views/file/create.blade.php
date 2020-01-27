@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah File</div>

                <div class="card-body">
                    <form action="/file/store" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required autofocus>
                            @if($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                            @if($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" required autofocus>
                            @if($errors->has('tanggal_lahir'))
                            <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" name="telepon" class="form-control" value="{{ old('telepon') }}" required autofocus>
                            @if($errors->has('telepon'))
                                <small class="text-danger">{{ $errors->first('telepon') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Gender</label>
                            <select class="custom-select" name="gender" id="gender">
                                <option selected value="">Pilih Gender</option>
                                    <option value="male">
                                        {{-- {{ male == old('gender') ? 'selected':'' }} --}}
                                        male
                                </option>
                                <option value="female">
                                        {{-- {{ female == old('gender') ? 'selected':'' }} --}}
                                    female
                                </option>
                            </select>
                            @if($errors->has('gender'))
                              <small class="text-danger">{{ $errors->first('gender') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                            @if($errors->has('gambar'))
                                <small class="text-danger">{{ $errors->first('gambar') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Simpan">
                            <a class="btn btn-secondary reset" href="#">reset</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection