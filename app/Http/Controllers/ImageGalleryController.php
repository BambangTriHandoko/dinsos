<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ImageGallery;


class ImageGalleryController extends Controller
{


    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$images = \DB::table('kategori as k')->join('users as u','k.user_id','=','u.id')->get();
    	return view('/admin/gallery/image-gallery',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'nama' => 'required',
           ]);
            $nama = $request->nama;
            \DB::table('kategori')->insert([

                'nama'=>$nama,
                'user_id'=>\Auth::user()->id,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        
    	return back()
    		->with('success');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $images = ImageGallery::find($id);
        $images->delete();
        return back()
    		->with('success');	
    }
}