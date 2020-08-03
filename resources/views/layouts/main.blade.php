<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Dinas Sosial Kota Tasikmalaya</title>

		<!-- Google font -->
		<link href="{{asset('webmag/https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600')}}" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('webmag/css/bootstrap.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('webmag/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('webmag/css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav " >
				<!-- Main Nav -->
				<div id="nav-fixed" >
					<div class="container ">
						<!-- logo -->
					<div class="nav-logo">
							<a href="{{'/'}}" class="logo"><img src="{{asset('LOGO.png')}}" alt="" ></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="category.html">Home</a></li>
							<li><a href="{{url('/profile')}}">Profile</a></li>
							<li class="cat-1"><a href="{{url('/layanan/index')}}">Layanan</a></li>
							<li class="cat-2"><a href="category.html">Galery</a></li>
							<li class="cat-3"><a href="http://pkh.dinsos.tasikmalayakota.go.id">PKH</a></li>
							<li class="cat-4"><a href="category.html">Visualisasi</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
								<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>

						<!-- /widget posts -->

					<!-- social links -->
					
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
			<!-- /row -->

				<!-- row -->
				@yield('content')				<!-- /row -->

				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
	
		<!-- Footer -->
	
		<!-- jQuery Plugins -->
		<script src="{{asset('webmag/js/jquery.min.js')}}"></script>
		<script src="{{asset('webmag/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('webmag/js/main.js')}}"></script>

	</body>
</html>
