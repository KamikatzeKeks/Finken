<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use App\Kennzeichen;
use View;

class KennzeichenController extends Controller {

    public function index() {
//$results = DB::select('select * from users where id = ?', array(1));
        //  return view('kennzeichen.index');
    }

    public function show() {

        echo $request;
        
          $kennzeichen = DB::table('kennzeichen')->get();

foreach ($kennzeichen as $user)
{
    var_dump($user->Stadt);
}

$input = $request->all();


    return redirect()->back();
        
        return view('kennzeichen.create');
    }



 public function store(Request $request)
    {
        $this->validate($request, [
            'identifier' => 'required',
        ]);


        $input = $request->all();
$tasks = DB::select("SELECT * FROM kennzeichen WHERE identifier LIKE '".$input['identifier']."'", array(1));
    //    Session::flash('flash_message',       var_dump($results));
  //  $bearLawly = Bear::where('name', '=', 'Lawly')
foreach ($tasks as $user)
{
    var_dump($user->Stadt);
}
        //$tasks =Kennzeichen::where('identifier','like', "'".$input['identifier']."'")->first();
    return View::make('kennzeichen.index', compact(['tasks']));


   // return view('kennzeichen.index')->withKennzeichen($tasks);
        
    }
}