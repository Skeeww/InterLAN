<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LimitRegisterReached;
use App\Models\Player;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(Request $request) {
        $request->session()->remove('team_name');
        $nb_inscrits = Player::all()->count();
        return view('index', ['nb_inscrits' =>  $nb_inscrits, 'MAX_MEMBERS' =>  LimitRegisterReached::$MAX_MEMBERS]);
    }
}
