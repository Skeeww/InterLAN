<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $request->session()->put(['team_name' => '']);
    return view('index');
});
Route::get('/reglement', function () {
    return view('reglement');
});
Route::get('/register', function () {
    return redirect('/');
});
Route::post('/register', function (Request $request) {
    $validate = $request->validate([
        'team_name'     => 'required'
    ]);
    $request->session()->put(['team_name' => $validate['team_name']]);
    return view('register', ['team_name' => $validate['team_name']]);
});
Route::get('/register/step1', function (Request $request) {
    return view('step1', ['team_name' => $request->session()->get('team_name')]);
});
Route::post('/register/step2', function (Request $request) {
    dd($request);
    return view('step2');
});