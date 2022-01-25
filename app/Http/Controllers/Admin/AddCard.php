<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class AddCard extends Controller
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
    public function displayCard(){
        return view('admin.AddCard');
    }
    public function AddCard(Request $request){
        $x= new Card();
        $x->priceCard=$request->priceCard;
        $x->quantity=$request->quantity;
        $x->typeCard=$request->typeCard;
        $x->save();
        return redirect('/Add_Card')->with('status', 'you are add card sucess')->with('statuscode', 'success');

    }



}
