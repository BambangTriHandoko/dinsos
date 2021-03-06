<!doctype html>
<html lang="en">
  <head>
  	<title>Rekomendasi KIS, KIP, Jampersal, Jamkesda</title>
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
	            <a href="{{URL::to('/layanan/persyaratan2')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Persyaratan</a>
	          </li>
	          <li>
	              <a href="{{URL::to('/layanan/pp2')}}">Prosedur Pelayanan</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/jk2')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jangka Waktu</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/propel2')}}">Produk Pelayanan</a>
	          </li>
	          <li>
              <a href="#">Galeri</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Rekomendasi KIS, KIP, Jampersal, Jamkesda</h2>
        <p><b> <h1 style="text-align:left"> Persyaratan </h1></b> </p>
        <p>1. Foto Copy KTP</p>
        <p>2. Foto Copy KK</p>
        <p>3. SKTM Kelurahan Cap Kecamatan</p>
        <p>4. Lembar Hasil Verifikasi dan Foto Lokasi </p>
        <p>5. Surat Rujukan Puskesmas Untuk Pasien Rawat Jalan di RS</p>
        <p>6. Surat Keterangan dirawat Untuk Pasien Rawat Inap di RS</p>
        <p>7. Surat Kuasa bila Dikuasakan</p>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="{{ asset('side/js/app.js') }}"></script>
  </body>
</html>