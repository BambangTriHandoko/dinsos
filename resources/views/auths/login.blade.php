<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('lte/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('lte/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('lte/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('lte/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('lte/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700')}}" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">>
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('lte/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="https://dinsos.tasikmalayakota.go.id/wp-content/uploads/2019/04/LOGO-DINSOS.png" width="200" height="60" loading="lazy alt="></div>
								<p class="lead">Kota Tasikmalaya</p>
							</div>
							<form class="form-auth-small" action="/postlogin" method="POST">
                            {{csrf_field()}}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email "type="email" class="form-control" id="signin-email"  placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="signin-password"  placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h3 class="heading">LOGIN UNTUK MENGAKSES HALAMAN ADMIN</h3>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
