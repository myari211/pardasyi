<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function coffee(){

        $coffee = DB::table('coffees')->get();

        return view('guest.coffee', compact('coffee'));
    }

    public function rice(){
        
        $rice = DB::table('rice')->get();

        return view('guest.rice', compact('rice'));
    }

    public function herbs(){

        $herbs = DB::table('herbs')->get();

        return view('guest.herbs', compact('herbs'));
    }

    public function meats(){

        $meats = DB::table('meats')->get();

        return view('guest.meats', compact('meats'));
    }

    public function fruits(){

        $fruits = DB::table('fruits')->get();

        return view('guest.fruits', compact('fruits'));
    }

    public function fish(){

        $fish = DB::table('fish')->get();

        return view('guest.fish', compact('fish'));
    }


    public function others(){
        
        $others = DB::table('others')->get();

        return view('guest.others', compact('others'));
    }
}
