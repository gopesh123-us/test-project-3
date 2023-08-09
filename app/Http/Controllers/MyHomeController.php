<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyHomeController extends Controller
{
    public function index()
    {
        $name = 'Gopesh.Sharmas Home';

        $id = DB::table('posts')->first ();

        return view('myhome', compact('id'));

    }
}
