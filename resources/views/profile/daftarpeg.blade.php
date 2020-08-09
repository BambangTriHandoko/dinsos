
@include('profile/header')
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10">
    
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <h3><b> Daftar Pegawai </b></h3> 
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped mytable">
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
        </div></div>
        @include('profile/sidebar')
@include('profile/footer')