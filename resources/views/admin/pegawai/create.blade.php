@extends('admin/admin')
@section('content')
<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     TAMBAH DATA Data Pegawai
                </div>
                <div class="card-body">
                    <form method="post" action="{{'/admin/pegawai/store'}}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP pegawai ..">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Jabatan Struktural</label>
                            <input type="text" name="jabatan_struk" class="form-control" placeholder="Jabatan pegawai ..">
 
                            @if($errors->has('jabatan_struk'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan_struk')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Jabatan Umum</label>
                            <input type="text" name="jabatan_umum" class="form-control" placeholder="Jabatan pegawai ..">
 
                            @if($errors->has('jabatan_umum'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan_umum')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>FOTO</label>
                            <input type="file" name="image" class="form-control" >
 
                            @if($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image')}}
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