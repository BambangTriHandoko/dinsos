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
                            <h2>cek</h2>
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
                $artikel = \DB::table('artikel')->orderby('created_at','desc')->paginate(12); 
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
{{$artikel->links()}}
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
                        <h2>Categories</h2>
                    </div>
                    <div class="category-widget">
                    <?php 
									$kategori = \DB::table('kategori')->get();
								?>
									@foreach($kategori   as $k)
									<?php 
									$total = \DB::table('artikel')->where('kategori',$k->id)->count();
								?>
										
							<ul>
									<li><a href="{{url('/berita/kategori/'.$k->id)}}" class="cat-1">{{$k->nama}}<span>{{$total}}</span></a></li>
									</ul>
								@endforeach
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