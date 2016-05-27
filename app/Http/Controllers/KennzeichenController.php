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
        

       // $input = Input::only('identifier');

        
            foreach ($request as $quest) {
        Log::info('request value ' .   $request->get('identifier'));

            }


        $input = $request->all();
        // Model::where('column', 'LIKE', '%value%')->get();

        $tasks = Kennzeichen::where('identifier', 'LIKE', $request->get('identifier'))->get();
        //    $tasks =Kennzeichen::where('identifier','like', "'".$input['identifier']."'")->first();

            //   $tasks = Kennzeichen::all();

        return View::make('kennzeichen.index', compact(['tasks']));

        // return view('kennzeichen.index')->withKennzeichen($tasks);
    }

}
