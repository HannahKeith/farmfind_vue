<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function create()
    {
      return view('contact');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name'=> 'required',
        'email'=> 'required',
        'message' => 'required'

      ]);
    }




}
