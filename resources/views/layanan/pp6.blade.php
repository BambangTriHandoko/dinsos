<!doctype html>
<html lang="en">
  <head>
  	<title>Pendampingan dan Perlindungan Anak Berhadapan dengan Hukum</title>
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
	            <a href="{{URL::to('/layanan/persyaratan6')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Persyaratan</a>
	          </li>
	          <li>
	              <a href="{{URL::to('/layanan/pp6')}}">Prosedur Pelayanan</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/jk6')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jangka Waktu</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/propel6')}}">Produk Pelayanan</a>
	          </li>
	          <li>
              <a href="#">Galeri</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h1 class="mb-4">Pendampingan dan Perlindungan Anak Berhadapan dengan Hukum</h1>
        <p><b> <h2 style="text-align:left"> Sistem, Mekanisme dan Prosedur pelayanan : </h2></b> </p>
        <p><h4>1. Pelapor memberikan laporan terkait ABH/ AMPK ke pihak Dinas Sosial</h4></p>
        <p><h4>2. Petugas menerima laporan dan menugaskan sakti peksos untuk melakukan pendampingan</h4></p>
        <p><h4>3. Sakti Peksos menyiapkan persyaratan administratif: melakukan identifikasi dan registrasi, melakukan penelusuran dan penelaahan masalah (assessment).</h4></p>
        <p><h4>4. Pekerja sosial melakukan rujukan kepada lembaga terkait dengan diketahui dinas sosial</h4></p>
        <p><h4>5. Pekerja sosial melaporkan hasil pendampingan kepada kasi bidang terkait</h4></p>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="{{ asset('side/js/app.js') }}"></script>
  </body>
</html>