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
    {
        $artikel = artikel::all();
    	return view('admin/artikel/create', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'judul' => 'required',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15048',
            
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['judul'] = $request->judul;
        artikel::create($input);
      


    	return back()
    		->with('success','Image Uploaded successfully.');
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
    public function show(artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	artikel::find($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');	
    }
}
