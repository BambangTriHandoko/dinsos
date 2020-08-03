@extends('admin/admin')
@section('content')
<body>
        
        
        <a href="/admin/artikel/create" class="btn btn-warning">Tambah</a>

            <div class="card mt-5">
                
                <div class="card-header text-center">
                    Daftar Artikel 
                </div>
                <div class="row">
                <div class="col-md-12">
                <div class="box">
                <divc lass="box-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>di upload pada</th>
                                <th>gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artikel as $p)
                            <tr>
                                <td>{{ $p->judul }}</td>
                                <td>{{ $p->update_at }}</td>
                                <td>
                                <img src="{{asset('storage/' .$p->image)}}" width="100" height="120"/></td>
                                   <td>
                                    <a href="/admin/artikel/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/admin/artikel/delete/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @endsection