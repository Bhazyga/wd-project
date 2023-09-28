<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class login extends Controller
{
    public function getdata(Request $request)
    {
        // Your code to process the request and prepare data
        // return view('login', ['data' => $yourData]);
        return User::all();
    }
}
