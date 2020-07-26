<!-- Navbar -->
@include('gallery/header')



<div class="container">


    <h3>GALLERY</h3>

    <div class="row">
    <div class='list-group gallery'>

    <div class="card-deck">

            @if($images->count())
                @foreach($images as $image)

  <div class="col mb-4">
    <div class="card">
      <a href="/images/{{ $image->image }}"><img src="/images/{{ $image->image }}" class="card-img-top" alt=""></a>
      <div class="card-body">
        <a href="/images/{{ $image->image }}"><h5 class="card-title" >{{ $image->title }}</h5></a>
        <p class="card-text">di upload pada {{$image->updated_at}}</p>
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