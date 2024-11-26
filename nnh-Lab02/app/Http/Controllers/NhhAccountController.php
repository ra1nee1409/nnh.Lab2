<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhhAccountController extends Controller
{
    //
    public function index(){
        return "<h1>Welcome to, Nguyen Ngoc Hieu - Controller </h1>";
    }

    //create form
    public function create() {
        return view('nnh-account-create');
    }
}
