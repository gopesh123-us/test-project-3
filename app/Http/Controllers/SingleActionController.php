<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $cards =
        [
            [
                'title' => 'Card one title',
                'body' => 'Card one body text',
                'status' => 1
            ],
            [
                'title' => 'Card two title',
                'body' => 'Card two body text',
                'status' => 0
            ],
            [
                'title' => 'Card three title',
                'body' => 'Card three body text',
                'status' => 1
            ],
            [
                'title' => 'Card four title',
                'body' => 'Card four body text',
                'status' => 0
            ],
            [
                'title' => 'Card five title',
                'body' => 'Card five body text',
                'status' => 1
            ]
        ];
        return view ('singleaction', compact('cards'));
    }
}
