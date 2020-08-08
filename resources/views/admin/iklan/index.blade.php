@extends('admin/admin')
@section('content')
<body>
        <div class="container">
        <a href="/admin/pegawai/create" class="btn btn-warning">Tambah</a>

            <div class="card mt-5">
                
                <div class="card-header text-center">
                    IKLAN BANNER 
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    @endsection