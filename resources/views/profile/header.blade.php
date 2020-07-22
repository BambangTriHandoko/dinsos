<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Profile</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-dark bg-dark navbar-expand-lg">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <div class="container">
    
    <a class="navbar-brand" href="{{url('/')}}">
    <img src="http://dinsos.tasikmalayakota.go.id/wp-content/uploads/2019/08/LOGO-BARU-DINSOS.png" width="180" height="40" class="d-inline-block align-top" alt="" loading="lazy">
    
  </a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{url('/')}}">Home</a>
      <a class="nav-item nav-link" href="{{url('/profile')}}">Profil</a>
      <!-- <a class="nav-item nav-link" href="{{url('/mahasiswa')}}">Layanan</a> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Layanan
        </a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a class="dropdown-item" href="{{url('/page1')}}">1.Bantuan Orang Terlantar Dalam Perjalanan(BOTP)</a>
    <a class="dropdown-item" href="{{url('/page2')}}">2.Rekomendasi KIS,KIP,jampersal,dan Jamkesda</a>
    <a class="dropdown-item" href="{{url('/page3')}}">3.Rekomendasi Pengangkatan Anak</a>
    <a class="dropdown-item" href="{{url('/page4')}}">4.Surat Tanda Terdaftar Untuk Lembaga Kesejahteraan Sosial(LKS)</a>
    <a class="dropdown-item" href="{{url('/page5')}}">5.Fasilitas Anak Jalanan dan Anak Terlantar</a>
    <a class="dropdown-item" href="{{url('/page6')}}">6.Pendampingan dan Perlindungan Anak Berhadapan Dengan Hukum</a>
    <a class="dropdown-item" href="{{url('/page7')}}">7.Rekomendasi Dan Rujukan Lansia Terlantar</a>
    <a class="dropdown-item" href="{{url('/page8')}}">8.Rekomendasi Dan Rujukan Disalbiltas Fisik dan </a>
    <a class="dropdown-item" href="{{url('/page9')}}">9.Rekomendasi Rujukan Korban Penyalahguanaan NAPZA</a>
    <a class="dropdown-item" href="{{url('/page10')}}">10.Rekomendasi Rujukan Tindak Kekerasan</a>
    <a class="dropdown-item" href="{{url('/page11')}}">11.Rekomendasi Dan Rujukan Wanita Tuna Susila</a>
    <a class="dropdown-item" href="{{url('/page12')}}">12.Bantuan Bagi Korban Paska Bencana</a>
  </div>
</li>
      <a class="nav-item nav-link" href="{{url('/Galery')}}">galery</a>
      <a class="nav-item nav-link" href="{{url('/Visualisasi')}}">Visualisasi</a>
      <a class="nav-item nav-link" href="http://pkh.dinsos.tasikmalayakota.go.id">PKH</a>
      <a class="nav-item nav-link" href="{{url('/Agenda')}}">Agenda</a>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</div>
    </ul>
  </nav>