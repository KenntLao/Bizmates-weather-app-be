<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class PlaceService
{
    public function getPlaces($city)
    {
        $response = Http::get("https://api.foursquare.com/v2/venues/search?v=20231010&near={$city}&oauth_token=2D2AOWENEHYXVWVH1TNV1TZRNVZYJBDSOAKU4JF0K02SJ4YJ");
        return $response->json();
    }
}