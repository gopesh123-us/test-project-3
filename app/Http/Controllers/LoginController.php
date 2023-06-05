<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class  LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        /* echo $request->name;
        echo $request->email;
        echo $request->password;
        echo "<br>";
        //dd($request);
        dd($request->all()); */

       /*  $request->validate(
            [
                // 'name' => 'required | alpha',
                'name' => ['required', 'alpha', 'min:6'],
                'email' => ['required', 'email'],
                'password' => 'required'
            ],
            [
                'name.required' => 'Useless person! forgot to put your name'
            ]
        );
        return $request->all(); */
    }
}
