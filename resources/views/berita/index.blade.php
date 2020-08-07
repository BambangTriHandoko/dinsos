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
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="" style="display: none !important;">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<!-- /post widget -->

						<!-- post widget -->
						<!-- /post widget -->
						
						<!-- catagories -->
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
						<!-- /catagories -->
						
						<!-- tags -->
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">January 2018</a></li>
									<li><a href="#">Febuary 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

@endsection