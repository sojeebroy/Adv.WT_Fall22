<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function getsignup( Request $Request )
    {

        $validated = $request->validate([
            'name' => 'required|alpha|min:1',
            'email' => 'required|email|unique:users',
            'password' => 'required|regex:^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$',
            'phone' => 'required|min:11|numeric|max:11',
            'address' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',


        ]);

        $var->$request->name;
        $var->$request->email;
        $var->$request->phone;
        $var->$request->address;
        $var->$request->password;

        return $var;



    }
        public function test(Request  $request)
        {

            return view ('form');
        }
}
?>
