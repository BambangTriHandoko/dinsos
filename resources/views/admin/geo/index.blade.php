@extends('admin/admin')
@section('content')
    <div class="row">
    <div class="col-md-12">
    <div class="box">
    <div class="container mb-3 mt-3">
    <a href="/admin/geo/create" class="btn btn-warning">Tambah</a>
    <table class="table mydatatable" style="width: 100%;" id="mydatatable">
    <thead>
    <tr>
    <th>#</th>
    <th>kecamatan</th>
    <th>PMKS</th>
    <th>PSKS</th>
    <th>Tahun</th>
    <th></th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($visual as $index=>$v)
    <tr>
    <td>{{ $index+1 }}</td>
    <td>{{$v->kecamatan}}</td>
    <td>{{$v->PMKS}}</td>
    <td>{{$v->PSKS}}</td>
    <td>{{$v->created_at}}</td>
     <td>
<a href="/admin/geo/edit/{{$v->id }}" class="btn btn-flat btn-primary" style="margin-bottom: 3px;">edit</a>
</td><td>
<a href="/admin/geo/delete/{{$v->id }}" class="btn btn-danger">Hapus</a></td></tr>
    @endforeach  
    </tbody>
    
    </tr></tfoot>
    </table>
    </div>

    </div>
    </div>
    </div>
    </div>

    @endsection