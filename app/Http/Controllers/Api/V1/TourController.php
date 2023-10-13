<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Travel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ToursListRequest;
use App\Http\Resources\TourResource;

class TourController extends Controller
{
    public function index(Travel $travel, ToursListRequest $request) 
{
    $tours = $travel->tours()
    ->
}
    
}
$tours = $travel->tours()

    
    ->orderBy('starting_date')
    ->paginate();

    return TourResource::collection($tours);