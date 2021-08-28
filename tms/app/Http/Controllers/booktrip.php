<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class booktrip extends Controller
{
    //

    public function booktrip()
    {
        return view('FrontEnd.booktrip');
    }

    public function store(Request $request)
    {
        $input=$request->all();

        booktrip::create($input);
        return view('FrontEnd.booktrip');
    }
}
