<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

use function PHPSTORM_META\type;

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


    private function distance2($latitude1, $longitude1, $latitude2,  $longitude2)
    {
           $long1 = deg2rad($longitude1);
           $long2 = deg2rad($longitude2);
           $lat1 = deg2rad($latitude1);
           $lat2 = deg2rad($latitude2);

           //Haversine Formula
           $dlong = $long2 - $long1;
           $dlati = $lat2 - $lat1;

           $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);

           $res = 2 * asin(sqrt($val));

           $radius = 3958.756/1000;

           return ($res*$radius);
    }
    public function index()
    {
        return Hotel::all();
    }

    public function indexNearBy($longitude,$latitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $hotels = Hotel::all();
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

    public function show(Hotel $hotel)
    {
        $hotel["rooms"]= $hotel->rooms;
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

    public function delete(Request $request, Hotel $hotel)
    {
        $hotel->delete();

        return response()->json(null, 204);
    }
}
