@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach($user as $data)
                    <form action="/admin/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}" required autofocus>
                            @if($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $data->email }}" required autofocus>
                            @if($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        {{-- <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required autofocus>
                            @if($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div> --}}

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Simpan">
                            <a class="btn btn-secondary" href="/admin">kembali</a>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection