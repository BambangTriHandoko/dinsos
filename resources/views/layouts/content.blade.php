<div class="section">

<div class="container">
<div class="row">	
					<!-- post -->
					@if(isset($random))
					@foreach($random as $r)
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="{{url('/berita/'.$r->artikel_id)}}"><img src="{{asset('uploads/'.$r->gambar)}}" style="width: 560px; height: 300px;"  alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="{{url('/berita/'.$r->artikel_id)}}">{{$r->kategorii}}</a>
								
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{$r->judul}}</a></h3>
							</div>
						</div>
					</div> 
					
					@endforeach
					@endif
					<!-- /post -->
					<!-- /post -->
				</div>
<h3>berita harian</h3>
<div class="row">
	<div class="col-md-9">


@foreach($artikel as $at)
                    <div class="col-md-4">
						<div class="post">
                        <a class="post-img" href="{{url('/berita/'.$at->artikel_id)}}"><img src="{{asset('uploads/'.$at->gambar)}}" style="width: 260px; height: 200px;" alt=""><h5 class="post-title">{{substr($at->judul,0,65)}}...<a href="{{url('/berita/'.$at->artikel_id)}}"></a></h5></a>	
												<div class="post-body">
								<div class="post-meta">
                                <a class="post-category cat-2" href="">{{$at->kategorii}}</a>
								<span class="post-date">tanggal {{date('d M Y',strtotime($at->created_at))}}</span>
								</div>
								
							</div>
						</div>
                    </div>
					@endforeach
					{{ $artikel->links() }}
					
					</div>
					
					<div class="col-md-3">
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
					</div>
</div>
</div>