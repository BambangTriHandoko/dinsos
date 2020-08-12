<!doctype html>
<html lang="en">
  <head>
  	<title>Rekomendasi Pengangkatan Anak</title>
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
	            <a href="{{URL::to('/layanan/persyaratan3')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Persyaratan</a>
	          </li>
	          <li>
	              <a href="{{URL::to('/layanan/pp3')}}">Prosedur Pelayanan</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/jk3')}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jangka Waktu</a>
	          </li>
	          <li>
              <a href="{{URL::to('/layanan/propel3')}}">Produk Pelayanan</a>
	          </li>
	          <li>
              <a href="#">Galeri</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h1 class="mb-4">Rekomendasi Pengangkatan Anak</h1>
        <p><b> <h2 style="text-align:left"> Sistem, Mekanisme dan Prosedur Pelayanan : </h2></b> </p>
        <p>1. Kepala Dinas memerintahkan Bidang Rehabilitasi Sosial untuk mempelajari surat permohonan agar disesuaikan dengan persyaratan yang telah ditentukan.</p>
        <p>2. Kepala Seksi Anak, Remaja, Lanjut Usia dan ODK melakukan peninjauan dan pemeriksaan lapangan untuk mengetahui apakah memenuhi syarat untuk diberuikan izin atau tidak.</p>
        <p>3. Apabila tidak memenuhi syarat maka disampaikan surat pemberitahuan. Apabila memenuhi syarat , Kepala Seksi Anak, Remaja, Lanjut Usia dan ODK menyusun konsep permohonan dan menyerahkannya kepada Kepala Dinas untuk ditandatangani.</p>
        <p>4. Konsep surat rekomendasi disampaikan kepada Kepala Dinas melalui Kepala Bidang, Sekdin untuk ditandatangani.</p>
        <p>5. Pemohon menerima surat rekomendasi yang telah di tandatangani oleh Kepala Dinas Sosial.</p>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="{{ asset('side/js/app.js') }}"></script>
  </body>
</html>