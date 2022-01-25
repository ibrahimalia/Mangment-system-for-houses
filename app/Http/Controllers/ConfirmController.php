<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConfirmController extends Controller
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

    public function confirm($id)
    {
        $user=Auth::user()->id;
        $testUser=DB::select('select idUser from reverses where idUser=? and idHouse=?',[$user,$id]);
        if($testUser==null){
            session()->flash('eval','success evaluation');
            return redirect('/home');
        }else{
            $data=DB::select('select * from order_confirms where idUser=? and idHouse=?',[$user,$id]);
            if ($data == null){
                $show=0;
            }else{
                $show=1;
            }
            return view('home.Confirm',compact('show'));

        }
    }
    public function addConfirm(Request $request,$id)
    {
       $x=new OrderConfirm();
        $x->idUser=Auth::user()->id;
        $x->idHouse=$id;
        $x->save();
        $request->session()->flash('add','Success: order is register');
        return redirect('/home');
    }

}
