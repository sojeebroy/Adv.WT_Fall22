<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class signupContoller extends Controller
{
    // private $data;
    // function __construct()
    // {
    //     $this->data=
    //     [
    //         'name'=>'Your name is required',
    //         'email'=>'Your email is required|email',
    //         'phone'=>'Your phoune number is required',
    //         'password'=>'password required'
    //     ];
    // }

    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request){
        // $this->data=
        // [
        //     'name'=>'Your name is required',
        //     'email'=>'Your email is required|email',
        //     'phone'=>'Your phoune number is required',
        //     'password'=>'password required'
        // ];

        $profiles = new Profile();
        $profiles->name = $request->input('name');
        $profiles->email = $request->input('email');
        $profiles->phone = $request->input('phone');
        $profiles->password = $request->input('password');
        $profiles->save();
        return redirect('profile')->with('status',"Inserted successfully");

        // $data['name'] = $request->name;
        // $data['email'] = $request->email;
        // $data['phone'] = $request->phone;
        // $data['password'] = $request->password;

        // DB::table('profiles')->insert($data);

        // dd(DB::table('profiles')->get());
        // return view('profile');

    }
}
