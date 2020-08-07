<div class="section">
			<!-- container -->
			<div class="container">
		
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
                        <br>      
                        <div class="col-md-12">
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
                    <div class="col-md-4">
						<div class="post">
                        <a class="post-img" href="{{url('/berita/'.$at->artikel_id)}}"><img src="{{asset('uploads/'.$at->gambar)}}" style="width: 260px; height: 200px;" alt=""></a>							<div class="post-body">
								<div class="post-meta">
                                <a class="post-category cat-2" href="">{{$at->kategori}}</a>
								<span class="post-date">tanggal {{date('d M Y',strtotime($at->created_at))}}</span>
								</div>
								<h3 class="post-title"><a href="{{url('/berita/'.$at->artikel_id)}}">{{$at->judul}}</a></h3>
							</div>
						</div>
                    </div>
                    <br>
                    @endforeach
					<div class="clearfix visible-md visible-lg"></div>
					<div class="col-md-4">
                        <div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">DINSOS<span> </span></a></li>
									<li><a href="#" class="cat-2">REHSOS<span></span></a></li>
									<li><a href="#" class="cat-4">PKH<span></span></a></li>
									<li><a href="#" class="cat-3">PEMBERSOS<span></span></a></li>
								</ul>
							</div>
                        </div>
                        </div>
				
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
                  		<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
					</div>
                </div>
            </div>
			<!-- /container -->
		</div>
		