<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class PagesController extends Controller
{
    

    public function home()
{
    
    return view('pages.home');
}
    
    
}
