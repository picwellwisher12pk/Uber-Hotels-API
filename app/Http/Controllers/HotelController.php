<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    private $longitude;
    private $latitude;

    private function distanceTo($lat1, $lon1, $lat2, $lon2) {
        // echo $lat1.":".$lon1." , ".$lat2.":".$lon2."  | ";
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          return ($miles * 1.609344);

        }
      }

    public function index()
    {
        return Hotel::withCount('rooms')->get();
    }

    public function indexNearBy($longitude,$latitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $hotels = Hotel::withCount('rooms')->get();
        $hotelsNearBy = $hotels->map(function($hotel){
            $distance = $this->distanceTo($this->latitude, $this->longitude, $hotel['longitude'],$hotel['latitude']);
            if( $distance < 5.0) {
                $hotel['distance']=$distance;
                return $hotel;
            }
        })->sortBy('distance');
        $hotelsNearBy = $hotelsNearBy->filter()->flatten();
        return $hotelsNearBy;
    }

    public function show($id)
    {
        $hotel = Hotel::with('rooms')->findOrFail($id);
        if(is_null($hotel)){
            return response()->json(null,404);
        }
        return $hotel;
    }

    public function store(Request $request)
    {
        $hotel = Hotel::create($request->all());

        return response()->json($hotel, 201);
    }

    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());

        return response()->json($hotel, 200);
    }

    public function delete(Hotel $hotel)
    {
        $hotel->delete();

        return response()->json(null, 204);
    }
}
