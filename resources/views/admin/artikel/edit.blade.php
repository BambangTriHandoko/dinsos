@extends('admin/admin')
@section('content')
   <div class="row">
   <div class="col-md-12">
   <div class="box">
   <div class="box-body">
   <form role="form" enctype="multipart/form-data" method="post" action="{{url('admin/artikel/'.$dt->artikel_id)}}">
                        {{csrf_field()}}
                        {{method_field('put')}}

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">judul</label>
                    <input type="name" name="judul" class="form-control" value="{{$dt->judul}}">
                  </div>
                  <div class="form-group">
                    <label >Kategori</label>
                    <select name='kategori'>
                  @foreach($kategori as $k)
                    <option value="{{$k->id}}">{{$k->nama}}</option>
                    @endforeach
                  <div class="form-group">
                    <label for="exampleInputPassword1">ISI</label>
                    <textarea class="form-control summernote" name="isi" id="" cols="30" rows="10">{{$dt->isi}}  </textarea>
                    </div>
                    
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form></div>
   </div></div></div>
    @endsection