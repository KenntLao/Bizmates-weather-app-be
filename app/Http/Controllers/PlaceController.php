<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PlaceService;

class PlaceController extends Controller
{
    protected $placeService;

    public function __construct(PlaceService $placeService)
    {
        $this->placeService = $placeService;
    }

    public function index(Request $request)
    {
        $city = $request->input('city');

        return $this->placeService->getPlaces($city);
    }
}