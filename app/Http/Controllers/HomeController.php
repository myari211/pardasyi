<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coffee = DB::table('coffees')
            ->get();

        return view('home', compact('coffee'));
    }

    public function coffe_post(Request $request){
        // $validate = Validator::make($request->all(), [
        //     "product_name" => ['required'],
        //     "price" => ['required'],
        //     "file" => ['required'],
        //     "product_description" => ['required']
        // ]);

        

        $file = $request->file('file');
        $fileName = time()."_".$file->getClientOriginalName();
        $directory = "content";

        $file->move($directory, $fileName);

        DB::table('coffees')
            ->insert([
                "name_product" => $request->product_name,
                "price" => $request->price,
                "image" => $fileName,
                "description" => $request->description,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

        return redirect()->back();
    }

    public function rice(){

        $rice = DB::table('rice')
        ->get();

        $riceCount = DB::table('rice')
            ->count();

        return view('admin.rice', compact('rice', 'riceCount'));
    }

    public function createRice(Request $request){
        $validator = Validator::make($request->all(), [
            "product_name" => ["required"],
            "price" => ["required"],
            "description" => ['required'],
            "file" => ['required'],
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $this->validate($request, [
            "product_name" => ["required"],
            "price" => ["required"],
            "description" => ['required'],
            "file" => ['required'],
        ]);

        // dd($request->all());
        

        $file = $request->file('file');
        $fileName = time()."_".$file->getClientOriginalName();
        $dir = "image/rice";
        $file->move($dir, $fileName);


        DB::table('rice')
            ->insert([
                "description" => $request->description,
                "name_product" => $request->product_name,
                "price" => $request->price,
                "image" => $fileName,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->back();

    }


    public function fish(){
        $fish = DB::table('fish')
            ->get();

        return view('admin.fish', compact('fish'));
    }

    public function createFish(Request $request) {
        $this->validate($request, [
            "product_name" => ["required"],
            "price" => ["required"],
            "description" => ['required'],
            "file" => ['required'],
        ]);

        // dd($request->all());
        

        $file = $request->file('file');
        $fileName = time()."_".$file->getClientOriginalName();
        $dir = "image/fish";
        $file->move($dir, $fileName);


        DB::table('fish')
            ->insert([
                "description" => $request->description,
                "name_product" => $request->product_name,
                "price" => $request->price,
                "image" => $fileName,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->back();

    }

    public function herbs(){

        $herbs = DB::table('herbs')
            ->get();

        return view('admin.herbs', compact('herbs'));
    }

    public function createHerbs(Request $request){
        $this->validate($request, [
            "product_name" => ["required"],
            "price" => ["required"],
            "description" => ['required'],
            "file" => ['required'],
        ]);

        // dd($request->all());
        

        $file = $request->file('file');
        $fileName = time()."_".$file->getClientOriginalName();
        $dir = "image/herbs";
        $file->move($dir, $fileName);


        DB::table('herbs')
            ->insert([
                "description" => $request->description,
                "name_product" => $request->product_name,
                "price" => $request->price,
                "image" => $fileName,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->back();
        
    }

    public function fruits(){

        $fruits = DB::table('fruits')
            ->get();

        return view('admin.fruits', compact('fruits'));
    }

    public function createFruits(Request $request){
        $this->validate($request, [
            "product_name" => ["required"],
            "price" => ["required"],
            "description" => ['required'],
            "file" => ['required'],
        ]);

        // dd($request->all());
        

        $file = $request->file('file');
        $fileName = time()."_".$file->getClientOriginalName();
        $dir = "image/fruit";
        $file->move($dir, $fileName);


        DB::table('fruits')
            ->insert([
                "description" => $request->description,
                "name_product" => $request->product_name,
                "price" => $request->price,
                "image" => $fileName,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->back();

        
    }

    public function meats(){

        $meats = DB::table('meats')
            ->get();

        return view('admin.meats', compact('meats'));
    }


    public function createMeats(Request $request){
        $this->validate($request, [
            "product_name" => ["required"],
            "price" => ["required"],
            "description" => ['required'],
            "file" => ['required'],
        ]);

        // dd($request->all());
        

        $file = $request->file('file');
        $fileName = time()."_".$file->getClientOriginalName();
        $dir = "image/Meats";
        $file->move($dir, $fileName);


        DB::table('meats')
            ->insert([
                "description" => $request->description,
                "name_product" => $request->product_name,
                "price" => $request->price,
                "image" => $fileName,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->back();
    }
}
