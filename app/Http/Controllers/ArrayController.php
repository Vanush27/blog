<?php

namespace App\Http\Controllers;


use App\Models\Company;
use App\Models\User;

class ArrayController extends Controller
{
    public function index()
    {
//        $data = ['1', '2', '6',
//            '3', '15', '7',
//            '3', '12', '9'];
//
//        return view('about', compact('data'));

//        $d = Company::find(1)->item;
//        dd($d);

//        $items = User::find(1)->items;
//        dd($items->toArray());

        $company = Company::find(1)->user;
        dd($company->toArray());
    }
}
