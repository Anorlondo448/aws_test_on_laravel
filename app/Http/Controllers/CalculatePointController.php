<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CalculatePointService;

class CalculatePointController extends Controller
{
    public function calcPoint(Request $request)
    {
        echo CalculatePointService::calcPoint($request->input('amount'));
    }
}
