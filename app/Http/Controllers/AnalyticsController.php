<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Entry;
use App\Models\Region;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function getCountries() {
        $countries = Country::all();
        return ['countries' =>$countries];
    }

   public function getEntries() { 
       $entries = Entry::all();
       return ['entries' =>$entries];
   }
   public function getRegions() {
       $regions = Region::all();
       return ['regions' =>$regions];
   }

   public function getRegion($id, $nombre) {
    $region = Region::where('id', '=', $id)->where('ContinentExp', '=', $nombre)->get();
    return ['region' => $region];
   }
}
