<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $name = 'Gopesh Sharma (RYT200)';
        return view('contact', compact('name'));
    }
}
