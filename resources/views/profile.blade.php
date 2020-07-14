@extends('layout/main')
@section('icon')
<link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">
@section('title','Profile')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
    <h1 class="mt-2">Hello,<?php echo $nama; ?>!</h1>
</div>
</div>
</div>

@endsection