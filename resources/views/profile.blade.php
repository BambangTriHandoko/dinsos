@extends('layout/main')
@section('icon')
<link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">
@section('title','Profile')
@section('container')
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
                        
                                <td>@if ($p->image)
                                <img src="{{asset('storage/' .$p->image)}}" width="100" height="120"/></td>
                                  @else 
                                  tidak ada gambar
                                  @endif
                                  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
@endsection