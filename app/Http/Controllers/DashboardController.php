<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pokemon\Pokemon;

class DashboardController extends Controller
{
    public function index()
    {
        Pokemon::ApiKey(config('pokemon.apiKey'));
        Pokemon::options(['verify' => true]);

//        $sets = Pokemon::Set()->all();
        $set = Pokemon::Set()->find('sv9');
//        dd($set);

        return view('dashboard', compact('set'));
    }
}
