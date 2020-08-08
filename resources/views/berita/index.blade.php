@extends('layouts/main')
@section('content')
<div class="section">
			<!-- container -->
			<div class="container">
                <!-- row -->
                <br>
				<div class="row">
                    <!-- Post content -->
                    <br>
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
                                <br>
								<h2>{{$artikel->judul}}</h2>
								<h5>dipublikasi pada tanggal {{date('d M Y',strtotime($artikel->created_at))}}</h5>
                                <img src="{{asset('uploads/'.$artikel->gambar)}}" style="width: 660px; height: 360px;" alt="">
                                
                                    {!! $artikel->isi !!}

                            </div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="" style="display: none !important;">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<!-- /author -->

						<!-- comments -->
                        
                        <!-- comment -->
						
						<!-- /reply -->
					</div>
					<!-- /Post content -->

					<!-- aside -->
					
						<!-- /ad -->

						<!-- post widget -->
						<!-- /post widget -->

						<!-- post widget -->
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="col-md-4">
					<div class="post post-widget">
								<a class="post-img" href="#"><img src="{{asset('iklan.png')}}" style="width: 300px; height: 300px;"alt=""></a>
							</div>
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>

							<div class="card">
							<div class="category-widget">
							<?php 
									$kategori = \DB::table('kategori')->get();
								?>
									@foreach($kategori as $k)
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
					</div><!-- /catagories -->
						
						<!-- tags -->
						<!-- /tags -->
						
						<!-- archive -->
						<!-- /archive -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

@endsection