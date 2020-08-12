<!doctype html>
<html lang="en">
  <head>
  	<title>Rekomendasi dan Rujukan Wanita Tuna Susila</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('side/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('side/css/bootstrap.min.css')}}"/>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="{{url('layanan/index')}}" class="logo">Layanan</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{URL::to('/layanan/persyaratan11')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Persyaratan</a>
	          </li>
	          <li>
	              <a href="{{URL::to('/layanan/pp11')}}">Prosedur Pelayanan</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/jk11')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jangka Waktu</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/propel11')}}">Produk Pelayanan</a>
	          </li>
	          <li>
              <a href="#">Galeri</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h1 class="mb-4">Prosedur Permohonan Rekomendari dan Rujukan bagi Tuna Susila ke Balai Rehabilitasi Sosial Karya Wanita</h1>
        <p><b> <h2 style="text-align:left"> Persyaratan : </h2></b> </p>
        <p><h4>1. Surat Permohonan dari Keluarga/aparat/kelurahan untuk di rehabilitasi;</h4></p>
        <p><h4>2. Usia 18-35 tahun;</h4></p>
        <p><h4>3. Surat keterangan dokter ;</h4></p>
        <p><h4>4. Kartu Keluarga/KTP;</h4></p>
        <p><h4>5. Ada pihak yang bertanggung jawab;</h4></p>
        <p><h4></h4></p>
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="{{ asset('side/js/app.js') }}"></script>
  </body>
</html>