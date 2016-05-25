<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class PagesController extends Controller
{
    
    
    public function home()
{
      $kennzeichen = DB::table('kennzeichen')->get();

foreach ($kennzeichen as $user)
{
    var_dump($user->Stadt);
}
    return view('pages.home');
}
    
    
}
