<!doctype html>
<html lang="en">
  <head>
  	<title>Bantuan Bagi Korban Paska Bencana</title>
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
	            <a href="{{URL::to('/layanan/persyaratan12')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Persyaratan</a>
	          </li>
	          <li>
	              <a href="{{URL::to('/layanan/pp12')}}">Prosedur Pelayanan</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/jk12')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jangka Waktu</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/propel12')}}">Produk Pelayanan</a>
	          </li>
	          <li>
              <a href="#">Galeri</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h1 class="mb-4">Bantuan Bagi Korban Paska Bencana</h1>
        <p><b> <h2 style="text-align:left"> Sistem, Mekanisme dan Prosedur pelayanan : </h2></b> </p>
        <p><h4>1. Kelurahan membuat laporan kejadian bencana yang diketahui lurah setempat kepada Dinas Sosial atau kepada Walikota dengan tembusan Dinas Sosial;</h4></p>
        <p><h4>2. Isi laporan memuat tentang ;</h4></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">a. Jenis bencana;</h5></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">b. Jumlah jiwa yang terkena bencana;</h5></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">c. Jenis kerusakan; RB (Rusak Ringan), RR (Rusak RIngan)</h5></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">d. Taksiran kerugian;</h5></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">e. Foto copy KTP;</h5></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">f. Foto copy KK;</h5></p>
        <p><h5 style="text-align: left; text-indent: 0.4in;">g. Jenis bencana;Foto/dokumentasi rumah, jiwa yang tertimpa bencana.</h5></p>
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