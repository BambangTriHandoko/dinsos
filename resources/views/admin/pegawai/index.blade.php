@extends('admin/admin')
@section('content')
<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Daftar Pegawai 
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan Struktural</th>
                                <th>Jabatan Umum</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->nip }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->jabatan_struk }}</td>
                                <td>{{ $p->jabatan_umum }}</td>
                        
                                <td>
                                <img src="{{asset('storage/' .$p->image)}}" width="100" height="120"/></td>
                                   <td>
                                    <a href="/admin/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/admin/pegawai/delete/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    @endsection