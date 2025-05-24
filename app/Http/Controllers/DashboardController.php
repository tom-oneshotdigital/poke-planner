<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Pokemon\Pokemon;

class DashboardController extends Controller
{
    public function index()
    {
//        Pokemon::ApiKey(config('pokemon.apiKey'));
//        Pokemon::options(['verify' => true]);
//
//        $sets = Pokemon::Set()->all();
//        $set = Pokemon::Set()->find('sv9');
//        dd($set);

        $collections = Collection::with('collectionType')->get();

        return view('dashboard', compact('collections'));
    }
}
