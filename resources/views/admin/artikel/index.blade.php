@extends('admin/admin')
@section('content')
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-body">
<a href="{{url('admin/artikel/create')}}" class="btn btn-flat btn-primary" style="margin-bottom: 12px;">TAMBAH</a>
<div class="container mb-3 mt-3">
<table class="table mydatatable" style="width: 100%;" id="mydatatable">
<thead>
<tr>
<th>#</th>
<th>judul</th>
<th>kategori</th>
<th>penulis</th>
<th>dibuat pada</th>
<th>edit</th>
<th></th>
<th> delete</th>
</tr>
</thead>
<tbody>
@foreach($data as $e=>$dt)
<tr>
<td>{{ $e+1 }}</td>
<td>{{ $dt->judul }}</td>
<td>{{ $dt->kategori }}</td>
<td>{{ $dt->name }}</td>
<td>{{ $dt->created_at }}</td>
<td><p>
<a href="{{url('admin/artikel/'.$dt->artikel_id)}}" class="btn btn-flat btn-secondary" style="margin-bottom: 12px;">EDIT</a>
<td></td></td>
<td><p>
<a href="/admin/artikel/delete/{{$dt->artikel_id}}" class="btn btn-flat btn-danger" style="margin-bottom: 12px;">Hapus</a>
<td></td></td>
</tr>
@endforeach
</tbody>
<tfoot><tr>
<th>#</th>
<th>judul</th>
<th>kategori</th>
<th>penulis</th>
<th>dibuat pada</th>
<th>edit</th>
<th></th>
<th> delete</th>

</tr></tfoot>
</table>
</div>

</div>
</div>
</div>
</div>

    @endsection