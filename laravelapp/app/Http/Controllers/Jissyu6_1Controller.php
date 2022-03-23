<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jissyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        $param = [
            'name'=>$request->name,
            'mail'=>$request->mail,
            'age'=>$request->age,
    ];;
        return view('jissyu6_1.index', ['items'=>$items]);
    }
    public function find(Request $request)
    {
        $item = DB::table('people')->where('id',$id)->first();
        return view('jissyu6_1.show', ['item' => $item]);
    }
}
