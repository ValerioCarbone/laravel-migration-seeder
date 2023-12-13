<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where(strtotime('departure_date') < strtotime(date('Ymd')));
        return view('train.index', compact('trains'));
    }
}
