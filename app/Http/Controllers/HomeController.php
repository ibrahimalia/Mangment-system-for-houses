<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $d= DB::table('houses')->where([
            ['governorate','like',Auth::user()->siteUser],
            ['rate','>=',3],
            ['reserve','=','Not reverse Yet']
        ])->orderBy('id', 'desc')->limit(6)->get();
        return view('home',compact('d'));
    }

    public function searchHome(Request $request)
    {
        $x=$request->governorate;
        $y=$request->categoryHouse;
        $z=$request->typeHouse;
        $e=$request->roomNumber;
        $m=$request->lower;
        $n=$request->upper;

        if ($request->sort==null){
            $l='price';
        }else{
            $l=$request->sort;
        }

        if ($request->rate==null){
            $r=0;
        }else{
            $r=$request->rate;
        }
        $d= DB::table('houses')->where(function($query) use ($x,$y,$z,$e,$m,$n,$r) {
                $query->where('governorate', '=', $x);
                $query->where('categoryHouse', '=', $y);
                $query->where('typeHouse', '=', $z);
                $query->where('roomNumber', '=', $e);
                $query->where('rate', '>=', $r);
                $query->whereBetween('price',[$m,$n]);
        })->orderBy($l)->get();
              return view('home.properties',compact('x','y','z','e','m','n','l','d'));
    }


}
