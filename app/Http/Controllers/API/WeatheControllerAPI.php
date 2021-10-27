<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\WeatherAPI;


class WeatheControllerAPI extends Controller
{
    public function index()
    {
        $weather = WeatherAPI::all();

        return response()->json(['weather'=>$weather],200);
    }
}
