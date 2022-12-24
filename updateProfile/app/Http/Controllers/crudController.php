<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudController extends Controller
{
    public function signup(){
        return view('signup');
    }
    function submit(Request $request){
        return $request->input();
    }

}
