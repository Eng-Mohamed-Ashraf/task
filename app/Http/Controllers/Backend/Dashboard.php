<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard(){


        return view('dashboard');
    }
}
