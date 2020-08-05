<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class AdminController extends Controller
{
    public function index(){
        $title = 'List Artikel';
        $data =\DB::table('artikel as a')->join('users as u','u.id','=','a.user_id')->get();
        
        return view('admin/artikel/index',compact('data'));   
    }
}
