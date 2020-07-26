<?php

namespace App\Http\Controllers;
use App\Pegawai;
use Illuminate\Http\Request;
use App\ImageGallery;
class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    public function profile(){
      $pegawai = Pegawai::all();
    	return view('profile/daftarpeg', ['pegawai' => $pegawai]);
      // return view('profile/struktur', ['pegawai' => $pegawai]);
    }
    public function profile1(){
      $pegawai = Pegawai::all();
    	return view('profile/struktur', ['pegawai' => $pegawai]);
    }
    public function index(){
      $pegawai = Pegawai::all();
      return view('profile/index',['pegawai' => $pegawai]);
    }
    public function profile2(){
      $pegawai = Pegawai::all();
    	return view('profile/tupoksi', ['pegawai' => $pegawai]);
    } 
    public function profile3(){
      $pegawai = Pegawai::all();
    	return view('profile/tujuan', ['pegawai' => $pegawai]);
    } 
    public function profile4(){
      $pegawai = Pegawai::all();
    	return view('profile/selayangpandang', ['pegawai' => $pegawai]);
    } 
    public function profile5(){
      $pegawai = Pegawai::all();
    	return view('profile/pmks', ['pegawai' => $pegawai]);
    } 
    public function profile6(){
      $pegawai = Pegawai::all();
    	return view('profile/dasarhukum', ['pegawai' => $pegawai]);
    } 
    public function gallery(){
      $images = ImageGallery::get();
    	return view('/gallery/index',compact('images'));
    }
}
