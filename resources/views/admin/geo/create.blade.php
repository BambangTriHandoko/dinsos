@extends('admin/admin')
@section('content')

<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     TAMBAH DATA Visualisasi
                </div>
                <div class="card-body">
                    <form method="post" action="{{'/admin/geo/store'}}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" placeholder="kecamatan">
 
                            @if($errors->has('kecamatan'))
                                <div class="text-danger">
                                    {{ $errors->first('kecamatan')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>PMKS</label>
                            <input type="text" name="PMKS" class="form-control" placeholder="PMKS">
 
                            @if($errors->has('PMKS'))
                                <div class="text-danger">
                                    {{ $errors->first('PMKS')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>PSKS</label>
                            <input type="text" name="PSKS" class="form-control" placeholder="PSKS">
 
                            @if($errors->has('PSKS'))
                                <div class="text-danger">
                                    {{ $errors->first('PSKS')}}
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
