
@extends('layouts.app')

@section('content')
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
                                {{ __('Login') }}
							</div>
                            <form method="POST" action="{{ route('login') }}">
                        @csrf
								<div class="form-group row">
                                <label for="signin-email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>
                                 
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
</div>			
								<div class="form-group">
                  <label for="password" class="control-label sr-only">{{ __('Password') }}</label>    
                   
                  
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>      
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
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
@endsection
