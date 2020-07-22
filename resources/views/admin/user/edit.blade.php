@extends('admin/admin')
@section('content')
<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Tambah User
                </div>
                <div class="card-body">
                    <form method="post" action="/admin/user/update/{{$users->id}}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama .." value="{{$users->name}}">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email .." value="{{$users->email}}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="text" name="password" class="form-control" placeholder="password .. "value="{{$users->password}}">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
    @endsection