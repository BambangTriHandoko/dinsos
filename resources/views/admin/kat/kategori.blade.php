@extends('admin/admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
            <table class="table table-stripped myTable">
<thead>
<tr>
<th>no</th>
<th>nama kategori</th>
<th>dibuat oleh</th>
<th>dibuat pada</th>
</tr>
</thead>
@foreach($kategori as $index=>$kt )
<tbody>
<tr>
    <td>{{ $indext+1 }}</td>
    <td>{{$kt->nama}}</td>
    <td>{{$kt->user_id}}</td>
    <td>{{$kt->create_at}}</td>
</tr>
</tbody>
@endforeach
</table>


<form role="form" enctype="multipart/form-data" method="post" action="{{url('admin/artikel/kategori')}}">
                        {{csrf_field()}}

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TAMBAH kategori</label>
                    <input type="name" name="nama" class="form-control" placeholder="Judul">
                  </div>
                    
                 </div>
          
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">tambah</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
    @endsection