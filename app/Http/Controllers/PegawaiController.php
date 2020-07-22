<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
    	return view('admin/pegawai/index', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function create()
    {
        return view('admin/pegawai/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nip' => 'required',
            'nama' => 'required',
            'jabatan_struk' => 'required',
            'jabatan_umum' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->file('image')){
            $image = $request->file('image')->store('images','public'); 
        }else{
            $image=null;
        }

        Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan_struk' => $request->jabatan_struk,
            'jabatan_umum' => $request->jabatan_umum,
            'image' => $image
    	]);
 
    	return redirect('admin/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    

    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
   return view('/admin/pegawai/edit', ['pegawai' => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
    		'nip' => 'required',
            'nama' => 'required',
            'jabatan_struk' => 'required',
            'jabatan_umum' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->file('image')){
            $image = $request->file('image')->store('images','public'); 
        }else{
            $image=null;
        }
        $pegawai = Pegawai::find($id);
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->jabatan_struk = $request->jabatan_struk;
        $pegawai->jabatan_umum = $request->jabatan_umum;
        $pegawai->image = $image;
        $pegawai->save();
        return redirect('admin/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
    $pegawai->delete();
    return redirect('/admin/pegawai');
    }
}
