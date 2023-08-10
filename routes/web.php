<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ControllerPracticeController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myhome', [MyHomeController::class, 'index'])->name('my.home');

Route::get('/home', function () {
    $blogs =
        [
            [
                'title' => 'Title One',
                'body' => 'Title One body. Lorem ipsum dolor sit amet consec',
                'status' => 1

            ],
            [
                'title' => 'Title two',
                'body' => 'Title two body. Lorem ipsum dolor sit amet consec',
                'status' => 1

            ],
            [
                'title' => 'Title three',
                'body' => 'Title three body. Lorem ipsum dolor sit amet consec',
                'status' => 0

            ],
            [
                'title' => 'Title four',
                'body' => 'Title four body. Lorem ipsum dolor sit amet consec',
                'status' => 1

            ]
        ];
    return view('home', compact('blogs'));
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

/**    below is the original code where we use closure and return the view. Later we created a controller that returns the view
 *     Route::get('/about', function () {
 *     return view('about');
 *     })->name('about');
 */

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/controllerpractice', [ControllerPracticeController::class, 'index']);

Route::resource('/blog', BlogController::class);

Route::get('/singleaction', SingleActionController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

//CSRF TOKEN
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::fallback(function () {
    $message = 'Please check the URL. This page does not exit';
    return view('/fallback', ['msg' => $message]);
});
