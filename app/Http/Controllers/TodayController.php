<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TodayController extends Controller
{
    public function today(){

        $currentDate = date('Y-m-d');


        $trains = Train::where('departure_date', $currentDate)->get();

        return view('today.today', compact('trains' ));
    }
}
