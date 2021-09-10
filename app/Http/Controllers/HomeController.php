<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trip;

class HomeController extends Controller
{
    public function index(){

        $allTrips = trip::all();
        $tripFiltrati = trip:: where('Climate', '!=' , 'oceanico freddo') ->get();

        return view('homepage',compact('allTrips','tripFiltrati'));
        
    }
    
}
