<?php

use App\Http\Controllers\LeagueOfLegendsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/summoner', [LeagueOfLegendsController::class, 'getData']);

