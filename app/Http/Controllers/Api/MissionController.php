<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Misson;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function viewAllMission()
    {
        // return Mission::all();
    }
}
