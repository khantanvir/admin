<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{
    public function admin_login(){
        $data['page_title'] = 'Admin|Login';
        return view('authpanel/login',$data);
    }
}
