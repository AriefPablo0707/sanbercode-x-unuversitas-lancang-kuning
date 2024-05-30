<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form (){
        return view(('pages.register'));
    }

    public function store(Request $request) {
        $firstname = $request['fname'];
        $lastname = $request['name'];

        return view('pages.home', ['fname' => $firstname, 'name' => $lastname]);
    }
}
