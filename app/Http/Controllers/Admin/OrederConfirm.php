<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OrderConfirmReverse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrederConfirm extends Controller
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
    public function confirm(){
        $order=DB::select('select * from order_confirms');
        return view('admin.OrderConfirm',compact('order'));
    }
    public function accept($idUser,$idHouse){
        $update=DB::update('update reverses set confirm=1 where idUser=? and idHouse=?',[$idUser,$idHouse]);
        $delete1=DB::delete('delete from order_confirms  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        $emails = DB::select('select * from users where id=?',[$idUser]);
        foreach ($emails as $email) {
            Mail::To($email->email)->send(new OrderConfirmReverse());
        }
        return redirect('/Order_Confirm')->with('status', 'you are accept order success')->with('statuscode', 'success');
    }
    public function delete($idUser,$idHouse){
        $delete1=DB::delete('delete from order_confirms  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        $delete2=DB::delete('delete from reverses  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        DB::update('update houses set reserve="Not reverse Yet" where id=?',[$idHouse]);
        return redirect('/Order_Card')->with('status', 'you are delete order success')->with('statuscode', 'success');

    }
}
