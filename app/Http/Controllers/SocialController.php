<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialController extends Controller
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

    public function social()
    {
       $data=DB::select('select * from users,advertisings where users.id=advertisings.idUser order by advertisings.time DESC ');
       return view('home.Social',compact('data'));
    }

}
