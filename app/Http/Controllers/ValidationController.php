<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function showform()
    {

        return view('login');
    }

    public function validateform(Request $request)
    {
        print_r($request->all());
        $this->validate($request, [
            'username' => 'required|alpha|min:2',
            'email' => 'required|email:rfc,dns',
            'address' => 'alpha_dash',
            'password' => 'required|min:8',
        ]);
    }
}
