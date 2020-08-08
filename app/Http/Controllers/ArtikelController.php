<?php

namespace App\Http\Controllers;

use App\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $title = 'List Artikel';    
        $data =\DB::table('artikel as a')->join('users as u','u.id','=','a.user_id')->join('kategori as k','k.id','=','a.kategori')->select('a.judul','a.created_at','u.name','k.nama as kategori')->where('a.user_id',\Auth::user()->id)->get();
        
        return view('admin/artikel/index',compact('title','data'));
    }
    public function create(){
        $title = 'Tambah Artikel';
        $kategori =\DB::table('kategori')->orderBy('nama','asc')->get();
        return view('admin/artikel/create',compact('kategori'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
            'judul'=>'required',
            'isi'=>'required',
            'kategori'=>'required'
        ]);
        $file = $request->file('image');
        $data = array();
        if($file){
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $data['judul'] = $request->judul;
            $data['kategori'] = $request->kategori;
            $data['isi'] = $request->isi;
            $data['user_id'] = \Auth::user()->id;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['gambar'] = $file->getClientOriginalName();
        }else{
            $data['judul'] = $request->judul;
            $data['kategori'] = $request->kategori;
            $data['isi'] = $request->isi;
            $data['user_id'] = \Auth::user()->id;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
        }
        \DB::table('artikel')->insert($data);
        \Session::flash('sukses','Data berhasil Tersimpan');
        return redirect('forms-admin');

          }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title ='EDIT';
        $kategori =\DB::table('kategori')->orderBy('nama','asc')->get();
        $dt = \DB::table('artikel')->where('artikel_id',$id)->first();
        return view('admin.artikel.edit',compact('dt','kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'judul'=>'required',
            'isi'=>'required',
            'kategori'=>'required'
        ]);
        $file = $request->file('image');
        $data = array();
        if($file){
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $data['judul'] = $request->judul;
            $data['kategori'] = $request->kategori;
            $data['isi'] = $request->isi;
            $data['user_id'] = \Auth::user()->id;
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['gambar'] = $file->getClientOriginalName();
        }else{
            $data['judul'] = $request->judul;
            $data['kategori'] = $request->kategori;
            $data['isi'] = $request->isi;
            $data['user_id'] = \Auth::user()->id;
            $data['updated_at'] = date('Y-m-d H:i:s');
        }
        \DB::table('artikel')->where('artikel_id',$id)->update($data);
        \Session::flash('sukses','Data berhasil Tersimpan');
        return redirect('forms-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = \DB::table('artikel')->where('artikel_id',$id)->delete();
     return back();
    }
}
