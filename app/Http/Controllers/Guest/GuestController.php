<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('guest.index');
    }

    public function about(){
        return view('guest.about');
    }

    public function vissionMission(){
        return view('guest.vission');
    }

    public function company(){
        return view('guest.company');
    }

    public function product(){
        return view('guest.product');
    }
}
