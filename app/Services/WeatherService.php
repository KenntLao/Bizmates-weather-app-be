<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function getWeather($city)
    {
        $apiKey = config('api_keys.openweathermap.api_key');
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}");
        return $response->json();
    }
}