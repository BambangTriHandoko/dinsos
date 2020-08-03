@extends('admin/admin')
@section('content')
    <div class="row">
    <div class="col-md-12">
<div class="box">
<div class="box-body">
<form method="post" action="{{url('/admin/artikel/create')}}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">judul</label>
                    <input type="name" name="judul" class="form-control"  placeholder="Judul Artikel">
                    @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
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
                    <label for="exampleInputPassword1">ISI</label>
                    <textarea class="form-control" name="isi" id="summernote" cols="50" rows="10"></textarea>
                    @if($errors->has('isi'))
                                <div class="text-danger">
                                    {{ $errors->first('isi')}}
                                </div>
                            @endif
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
              </form>

</div>
</div>

    </div>
    </div>
    @endsection