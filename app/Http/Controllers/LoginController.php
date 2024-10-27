<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

        //validation

        $validator = $request->validate([
            'email' => 'required|email|in:karunjigii@gmail.com',
            'password' => 'required|string|in:rootadmin12345',
        ]);
    


        return view('pages.admin.dashboard');


    }
}
