<?php

namespace App\Http\Controllers;
use App\Pegawai;
use App\Visual;
use Illuminate\Http\Request;
use App\ImageGallery;
class PagesController extends Controller
{
    public function home(){
      $artikel = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.kategori')->select('a.artikel_id','a.judul','a.gambar','a.created_at','k.nama as kategorii')->orderby('created_at','desc')->paginate(6);
      $random = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.kategori')->select('a.artikel_id','a.judul','a.gambar','a.created_at','k.nama as kategorii')->limit(1)->inRandomOrder()->get();
  
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
      $visual = Visual::all();
      $categories = [];
      $data = [];
      $data1 = [];
      foreach($visual as $kec){
        $categories[] = $kec->kecamatan;
        $data[] = $kec->PMKS;
        $data1[] = $kec->PSKS;
      }
      return view('visualisasi/index',['visual'=>$visual,'categories'=>$categories,'data'=>$data,'data1'=>$data1]);
    }
    public function layanan(){
      return view('layanan/index');
  }
  public function layanan1(){
    return view('layanan/layanan1');
}
public function persyaratan1(){
  return view('layanan/persyaratan1');
}
public function pp1(){
  return view('layanan/pp1');
}
public function jk1(){
  return view('layanan/jk1');
}
public function propel1(){
  return view('layanan/propel1');
}
public function layanan2(){
  return view('layanan/layanan2');
}
public function persyaratan2(){
return view('layanan/persyaratan2');
}
public function pp2(){
return view('layanan/pp2');
}
public function jk2(){
return view('layanan/jk2');
}
public function propel2(){
return view('layanan/propel2');
}
public function layanan3(){
return view('layanan/layanan3');
}
public function persyaratan3(){
return view('layanan/persyaratan3');
}
public function pp3(){
return view('layanan/pp3');
}
public function jk3(){
return view('layanan/jk3');
}
public function propel3(){
return view('layanan/propel3');
}
public function layanan4(){
return view('layanan/layanan4');
}
public function persyaratan4(){
return view('layanan/persyaratan4');
}
public function pp4(){
return view('layanan/pp4');
}
public function kelengkapan4(){
return view('layanan/kelengkapan4');
}
public function jk4(){
return view('layanan/jk4');
}
public function propel4(){
return view('layanan/propel4');
}

public function layanan5(){
return view('layanan/layanan5');
}
public function persyaratan5(){
return view('layanan/persyaratan5');
}
public function pp5(){
return view('layanan/pp5');
}
public function jk5(){
return view('layanan/jk5');
}
public function propel5(){
return view('layanan/propel5');
}

public function layanan6(){
return view('layanan/layanan6');
}
public function persyaratan6(){
return view('layanan/persyaratan6');
}
public function pp6(){
return view('layanan/pp6');
}
public function jk6(){
return view('layanan/jk6');
}
public function propel6(){
return view('layanan/propel6');
}

public function layanan7(){
return view('layanan/layanan7');
}
public function persyaratan7(){
return view('layanan/persyaratan7');
}
public function pp7(){
return view('layanan/pp7');
}
public function jk7(){
return view('layanan/jk7');
}
public function propel7(){
return view('layanan/propel7');
}

public function layanan8(){
return view('layanan/layanan8');
}
public function persyaratan8(){
return view('layanan/persyaratan8');
}
public function pp8(){
return view('layanan/pp8');
}
public function jk8(){
return view('layanan/jk8');
}
public function propel8(){
return view('layanan/propel8');
}

public function layanan9(){
return view('layanan/layanan9');
}
public function persyaratan9(){
return view('layanan/persyaratan9');
}
public function pp9(){
return view('layanan/pp9');
}
public function jk9(){
return view('layanan/jk9');
}
public function propel9(){
return view('layanan/propel9');
}

public function layanan10(){
return view('layanan/layanan10');
}
public function persyaratan10(){
return view('layanan/persyaratan10');
}
public function pp10(){
return view('layanan/pp10');
}
public function jk10(){
return view('layanan/jk10');
}
public function propel10(){
return view('layanan/propel10');
}

public function layanan11(){
return view('layanan/layanan11');
}
public function persyaratan11(){
return view('layanan/persyaratan11');
}
public function pp11(){
return view('layanan/pp11');
}
public function jk11(){
return view('layanan/jk11');
}
public function propel11(){
return view('layanan/propel11');
}

public function layanan12(){
return view('layanan/layanan12');
}
public function persyaratan12(){
return view('layanan/persyaratan12');
}
public function pp12(){
return view('layanan/pp12');
}
public function jk12(){
return view('layanan/jk12');
}
public function propel12(){
return view('layanan/propel12');
}
  public function berita($artikel_id){
    $artikel = \DB::table('artikel')->where('artikel_id',$artikel_id)->first();
    return view('/berita/index',compact('artikel'));
  }
}
 