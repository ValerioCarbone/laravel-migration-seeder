<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>', date('Y-m-d'))->orderBy('departure_date')->orderBy('departure_time')->get();
        return view('train.index', compact('trains'));
    }
}
