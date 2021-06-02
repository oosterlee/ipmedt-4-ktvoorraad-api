<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winner;
class WinnersController extends Controller
{
    public function show($year){
        

        $winner = \App\Models\Winner::where('year','=',$year)->first();

        return $winner;
    }
}
