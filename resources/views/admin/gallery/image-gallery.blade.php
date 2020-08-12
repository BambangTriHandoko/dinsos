@extends('admin/admin')
@section('content')
<body>


<div class="container">

<table class="table table-stripped myTable">
<thead>
<tr>
<th>no</th>
<th>nama kategori</th>
<th>dibuat oleh</th>
<th>dibuat pada</th>
<th>#</th>
</tr>
</thead>
@foreach($images as $index=>$kt )
<tbody>
<tr>
    <td>{{ $index+1 }}</td>
    <td>{{$kt->nama}}</td>
    <td>{{$kt->name}}</td>
    <td>{{$kt->created_at}}</td>
    <td><a href="/admin/kategori/delete/{{$kt->id}}" class="btn btn-flat btn-danger" style="margin-bottom: 12px;">Hapus</a></td>
     </tbody>
@endforeach
</table>

    <h5>TAMBAH KATEGORY</h5>
    <form action="{{ url('/admin/gallery/image-gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {!! csrf_field() !!}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif


        <div class="row">
            <div class="col-md-5">
                <strong>nama kategori</strong>
                <input type="text" name="nama" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 


    <div class="row">
    <div class='list-group gallery'>


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->


</body>
    @endsection