<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmReservation;
use App\Mail\OrderAccept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderCard extends Controller
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
    public function orderCard(){
        $order=DB::select('select * from oreder_cards');
        return view('admin.OrderCard',compact('order'));

    }

    public function accept($idUser,$idCard){
        $x=DB::update('update oreder_cards set typeUser="office" where idCard=? and idUser=?',[$idCard,$idUser]);
        $emails = DB::select('select * from users where id=?',[$idUser]);
        foreach ($emails as $email) {
                Mail::To($email->email)->send(new OrderAccept());
        }
        return redirect('/Order_Card')->with('status', 'you are accept order success')->with('statuscode', 'success');

    }
    public function delete($idUser,$idCard){
        $y=DB::delete('delete from oreder_cards  where idCard=? and idUser=?',[$idCard,$idUser]);
        return redirect('/Order_Card')->with('status', 'you are delete order success')->with('statuscode', 'success');

    }
}
