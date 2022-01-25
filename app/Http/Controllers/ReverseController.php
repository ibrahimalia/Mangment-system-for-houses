<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Opinion;
use App\Models\Reverse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReverseController extends Controller
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

    public function reverse(Request $request,$id)
    {
        $x=new Reverse();
        $x->idUser=Auth::user()->id;
        $x->idHouse=$request->idHouse;
        $x->save();
        //update on table house
        $house=$request->idHouse;
        House::where('id', $house)
            ->update(['reserve' => 'reverse now']);
        session()->flash('reverse','Success reverse...Please complete the procedures after two days');
        return redirect('/properties Details/'.$id);


    }








}
