<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use App\Kennzeichen;
use View;
use Log;
use App\Http\Requests\KennzeichenFormRequest;
class KennzeichenController extends Controller {

    public function index() {
//$results = DB::select('select * from users where id = ?', array(1));
        //  return view('kennzeichen.index');
    }

    public function show() {

        echo $request;

        $kennzeichen = DB::table('kennzeichen')->get();

        foreach ($kennzeichen as $user) {
            var_dump($user->Stadt);
        }

        $input = $request->all();


        return redirect()->back();

        return view('kennzeichen.create');
    }

    public function store(KennzeichenFormRequest $request) {
        
        $kennzeichenObjects = Kennzeichen::where('identifier', 'LIKE', $request->get('identifier'))->get();


        return View::make('kennzeichen.index', compact(['kennzeichenObjects']));

    }

}
