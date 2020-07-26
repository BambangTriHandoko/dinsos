@extends('admin/admin')
@section('content')
<body>


<div class="container">


    <h3>GALLERY</h3>
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
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 


    <div class="row">
    <div class='list-group gallery'>

    <div class="card-deck">

            @if($images->count())
                @foreach($images as $image)

  <div class="col mb-4">
    <div class="card">
      <img src="/images/{{ $image->image }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $image->title }}</h5>
        <p class="card-text">di upload pada {{$image->updated_at}}</p>
        <form action="{{ url('/admin/gallery/image-gallery',$image->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete" >
                    {!! csrf_field() !!}
                    <button type="submit" class="close-icon btn btn-danger">delete<i class="glyphicon glyphicon-remove"></i></button>
                    </form>
      </div>
    </div>
  </div>

                 @endforeach
            @endif
            </div>

        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->


</body>
    @endsection