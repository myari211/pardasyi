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
}
