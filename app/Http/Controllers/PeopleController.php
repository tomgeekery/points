<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = \App\People::all();
        return view('people.index', compact('people'));
    }
}
