<?php

namespace App\Http\Controllers;
use App\Pegawai;
use Illuminate\Http\Request;
use App\ImageGallery;
class PagesController extends Controller
{
    public function home(){
      $artikel = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.kategori')->select('a.artikel_id','a.judul','a.gambar','a.created_at','k.nama as kategorii')->orderby('created_at','desc')->paginate(6);
      $random = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.kategori')->select('a.artikel_id','a.judul','a.gambar','a.created_at','k.nama as kategorii')->limit(2)->inRandomOrder()->get();
  
      return view('index',compact('artikel','random'));
      }
    public function search(Request $request){
        $search = $request->search;
        $artikel = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.kategori')->where('a.judul','like','%'.$search.'%')->orwhere('a.isi','like','%'.$search.'%')->select('a.artikel_id','a.judul','a.gambar','a.created_at','k.nama as kategorii')->orderby('created_at','desc')->paginate(6);  
        return view('index',compact('artikel'));
    }
     public function kategori($kategori_id){
      $data = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.kategori')->where('a.kategori',$kategori_id)->select('a.artikel_id','a.judul','a.gambar','a.created_at','k.nama as kategorii')->orderby('created_at','desc')->paginate(6);
      return view('/berita/kategori',compact('data'));
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
      return view('gallery/index');
    }
    public function visual(){
      return view('visualisasi/index');
    }
    public function layanan(){
      return view('layanan/index');
  }
  public function berita($artikel_id){
    $artikel = \DB::table('artikel')->where('artikel_id',$artikel_id)->first();
    return view('/berita/index',compact('artikel'));
  }
}
 