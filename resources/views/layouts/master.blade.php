<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
            header{
                background-color: #F8F8FF;
            }
            main{
                background-color: #F0FFF0;
            }
            footer{
                background-color: #FAEBD7;
            }
        </style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">
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
			<header>
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
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/profile')}}">Profile</a></li>
							<li class="cat-1"><a href="{{url('/layanan/index')}}">Layanan</a></li>
							<li class="cat-2"><a href="{{url('/gallery')}}">Galery</a></li>
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
					
				
			
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->

		<!-- /section -->
		<!-- section -->
		<main>
@include('layouts.content')

		<!-- section -->
				
</main>
		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<div class="col-md-3">
						<div class="col-lg-4 col-md-4 col-sm-4">
				<div id="custom_html-3" class="widget_text widget widget_custom_html"><span><h5>HUBUNGI KAMI</h5></span><div class="textwidget custom-html-widget"><center>
	<table id="tabel-kontak">
		<tbody><tr>
			<td><span class="fa fa-map-marker" style="font-size:1.2em">:</span></td>
			<td><a href="https://goo.gl/maps/1vzohfFLxDwi6Any6" ><h4>Jl. Ir H Djuanda Komplek Perkantoran<h4></a></td>
		</tr>
		<tr>
			<td><span class="fa fa-phone" style="font-size:1.2em">:</span></td>
			<td><a href="tel:02657523848">(0265) 7523848</a></td>
		</tr>
		<tr>
			<td><span class="fas fa-envelope" style="font-size:1.2em">:</span></td>
			<td><a href="mailto:dinasosialkotatasik@gmail.com">dinsos.kotatasik@gmail.com</a></td>
		</tr>
		<tr>
			<td><span class="fa fa-instagram" style="font-size:1.2em">:</span></td>
			<td><a href="http://instagram.com/dinsostasikmalayakota" target="_blank" rel="noopener noreferrer">@dinsostasikmalayakota</a></td>
		</tr>
		<tr>
			<td><span class="fa fa-globe" style="font-size:1.2em">:</span></td>
			<td><a href="http://tasikmalayakota.go.id" target="_blank" rel="noopener noreferrer">Website Resmi Kota Tasikmalaya</a></td>
		</tr>
	</tbody></table>
</div>			</div>
							</div>
					</div>

					<div class="col-md-3">
					<div class="col-lg-4 col-md-3 col-sm-4">
				<div id="custom_html-4" class="widget_text widget widget_custom_html"><h4 class="widget-title h6"><span><h4>LOKASI</h4></span></h4><div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3537044252372!2d108.20217792917812!3d-7.307207099670387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f50cff99d8e43%3A0x36ee9ad28e7814e!2sDinas+Sosial+Tasikmalaya!5e0!3m2!1sen!2sid!4v1564370132216!5m2!1sen!2sid" width="450" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe><br><br><br>
</div></div>			</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>

		<!-- jQuery Plugins -->
		<script src="{{asset('webmag/js/jquery.min.js')}}"></script>
		<script src="{{asset('webmag/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('webmag/js/main.js')}}"></script>

	</body>
</html>
