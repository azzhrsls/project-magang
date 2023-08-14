<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        Return view('admin.login');
    }

    public function login_proses(Request $request){
        dd($request->all());
    }

    public function registrasi(){
        return view('admin.registrasi');
    }
}
