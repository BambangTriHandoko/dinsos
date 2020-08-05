@extends('layouts/main')
@section('content')
<div class="container">
		
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <br>      
                <div class="col-md-8">
                <br>
                    <div class="section-title">
                            <h2>Berita Harian</h2>
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-12">
                
            </div>

            <!-- post -->
            <!-- /post -->

            <!-- post -->
            <!-- /post -->

            <!-- post -->
            <!-- /post -->
            <?php 
                $artikel = \DB::table('artikel')->orderby('created_at','desc')->get(); 
                ?>

@foreach($artikel as $at)
            <div class="col-md-3">
                <div class="post">
                <a class="post-img" href="{{url('/berita/'.$at->artikel_id)}}"><img src="{{asset('uploads/'.$at->gambar)}}" style="width: 240px; height: 180px;" alt=""></a>							<div class="post-body">
                        <div class="post-meta">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @endforeach
            <div class="clearfix visible-md visible-lg"></div>

            <!-- post -->
            
            <!-- /post -->

            <!-- post -->
            
            <!-- /post -->

            <!-- post -->
            
            <!-- /post -->
        </div>
        <!-- /row -->

                    <!-- /post -->

                    <!-- /post -->
                    
                <!-- /ad -->
                
                <!-- catagories -->
            <div class="col-md-4">
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-1">DINSOS<span>340</span></a></li>
                            <li><a href="#" class="cat-2">REHSOS<span>74</span></a></li>
                            <li><a href="#" class="cat-4">PKH<span>41</span></a></li>
                            <li><a href="#" class="cat-3">PEMBERSOS<span>35</span></a></li>
                        </ul>
                    </div>
                </div>
                </div>
                <!-- /catagories -->
                
                <!-- tags -->
                <!-- /tags -->
            </div>
        </div>
    </div>
    <!-- /container -->
</div>


@endsection