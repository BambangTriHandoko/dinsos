@extends('admin/admin')
@section('content')
<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Daftar User
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $p)
                            <tr>

                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->password }}</td>
<td>                    
                                    <a href="/admin/user/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/admin/user/delete/{{$p->id}}" class="btn btn-danger">Hapus</a>
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