<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LeagueOfLegendsController extends Controller
{
    public function getData()
{
    $apiKey = 'RGAPI-7050ce35-de37-4b52-9522-44df244d0e95';
    $summonerName = 'vivohop';

    $client = new Client();
    $response = $client->get("https://la1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{$summonerName}?api_key={$apiKey}");

    $data = json_decode($response->getBody(), true);

    return view('summoner', compact('data'));
}

}
