<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
//        dd(request()->ip());
        return view('contacts.index');
    }

    public function send(Request $request)
    {
        dd($request->all());
    }

}
