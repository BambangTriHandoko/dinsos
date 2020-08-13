<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Visual;
class JsonController extends Controller
{
    public function index(){
        
        
        $visual = Visual::all();
        return view('/admin/geo/index',['visual' => $visual]);
    }
    public function create(){
        return view('/admin/geo/create');
    }
    public function edit($id)
    {
        $visual = Visual::find($id);
   return view('/admin/geo/edit', ['visual' => $visual]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
    		'kecamatan' => 'required',
            'PMKS' => 'required',
            'PSKS' => 'required',
        ]);

        Visual::create([
            'kecamatan' => $request->kecamatan,
            'PMKS' => $request->PMKS,
            'PSKS' => $request->PSKS,
           
           
    	]);
 
    	return redirect('admin/geo');
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
    		'kecamatan' => 'required',
            'PMKS' => 'required',
            'PSKS' => 'required',
           ]);
        $visual = Visual::find($id);
        $visual->kecamatan = $request->kecamatan;
        $visual->PMKS = $request->PMKS;
        $visual->PSKS = $request->PSKS;
        $visual->save();
        return redirect('admin/geo');
    }
    public function delete($id)
    {
        $visual = Visual::find($id);
    $visual->delete();
    return redirect('/admin/geo');
    }
}

