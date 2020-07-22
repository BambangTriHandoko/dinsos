<?php

namespace App\Http\Controllers;
use App\Pegawai;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    public function profile(){
      $pegawai = Pegawai::all();
    	return view('profile', ['pegawai' => $pegawai]);
    }
}
