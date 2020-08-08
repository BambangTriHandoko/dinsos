@extends('layouts/main')
@section('content')
<div class="section">

<div class="container">
<div class="row">	
				</div>
<h3>berita harian</h3>
<div class="row">
	<div class="col-md-9">


@foreach($data as $at)
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
					{{ $data->links() }}
					
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
					</div>
</div>
</div>
@endsection