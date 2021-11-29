<?php

namespace App\Http\Controllers;


class ArrayController extends Controller
{
    public function index()
    {
        $data = ['1', '2', '6',
            '3', '15', '7',
            '3', '12', '9'];

        return view('about', compact('data'));

    }
}
