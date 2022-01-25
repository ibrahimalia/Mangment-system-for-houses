<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyProfile extends Controller
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

    public function myProfile(){

        $user = Auth::user()->id;
        $profile=DB::select('select * from users where id=?',[$user]);
        $card = DB::select('select * from oreder_cards where idUser=?', [$user]);
        $reverse=DB::select('select * from houses,reverses where houses.id=reverses.idHouse and reverses.idUser=? ',[$user]);
        $YHouse=DB::select('select * from houses where idUser=? and reserve="Not reverse Yet" ',[$user]);
        $orderConfirm=DB::select('select * from houses,order_confirms where houses.id=order_confirms.idHouse and order_confirms.idHouse in (select id from houses where idUser=?)',[$user]);
        $evalHouse=DB::select('select * from houses,evaluations where houses.id=evaluations.idHouse and evaluations.idUser=?',[$user]);
        $evalUser=DB::select('select * from users,evaluation_users where users.id=evaluation_users.idUser and evaluation_users.idUserEvaluate=?',[$user]);
        return view('home.MyProfile',compact('profile','card','reverse','YHouse','orderConfirm','evalHouse','evalUser'));

    }

    public function updateProfileData(Request $request)
    {
        $name=$request->name;
        if ($name==null){
            $name=Auth::user()->name;
        }
        $site=$request->siteUser;
        if ($site==null){
            $site=Auth::user()->siteUser;
        }
        $email=$request->email;
        if ($email==null){
            $email=Auth::user()->email;
        }
        $phone=$request->phone;
        if ($phone==null){
            $phone=Auth::user()->phone;
        }
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('loads/', $filename);
        }else{
            $filename=Auth::user()->image;
        }
        DB::update('update  users set name=?,siteUser=?,email=?,phone=?,image=? where id=?',[$name,$site,$email,$phone,$filename,Auth::user()->id]);

        return redirect('/My_Profile');

    }

     public  function deleteCard($id){
        DB::delete('delete from oreder_cards where idUser=?',[$id]);
        session()->flash('deleteCard','success delete subscribe in our card');
         return redirect('/My_Profile');
     }

    public  function deleteReservation($idUser,$idHouse){
        DB::delete('delete from reverses where idUser=? and idHouse=?',[$idUser,$idHouse]);
        DB::delete('delete from order_confirms where idUser=? and idHouse=?',[$idUser,$idHouse]);
        DB::update('update houses set reserve="Not reverse Yet" where id=?',[$idHouse]);
        session()->flash('deleteReservation','success delete reservation...Thanks');
        return redirect('/My_Profile');
    }

    public  function deleteYourHouse($idUser,$idHouse){
        DB::delete('delete from houses where id=?',[$idHouse]);
        DB::delete('delete from reverses where idHouse=?',[$idHouse]);
        DB::delete('delete from order_confirms where idHouse=?',[$idHouse]);
        DB::delete('delete from evaluations where idHouse=?',[$idHouse]);
        session()->flash('deleteYourHouse','success delete house...Thanks');
        return redirect('/My_Profile');
    }
    public function acceptOrder($idHouse,$idUser){
      DB::update('update reverses set confirm=1 where idUser=? and idHouse=?',[$idUser,$idHouse]);
      DB::delete('delete from order_confirms  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        session()->flash('acceptOrder','Accept order...GOOD');
        return redirect('/My_Profile');
    }
    public function deleteOrder($idHouse,$idUser){
        DB::delete('delete from order_confirms  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        DB::delete('delete from reverses  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        DB::update('update houses set reserve="Not reverse Yet" where id=?',[$idHouse]);
        session()->flash('deleteOrder','success delete order...Thanks');
        return redirect('/My_Profile');
    }
    public function evaluationHouse($idUser,$idHouse){
        DB::delete('delete from evaluations  where idUser=? and idHouse=?',[$idUser,$idHouse]);
        //update avg to add table houses
        $house=$idHouse;
        $data=DB::select('select rate from evaluations where idHouse=?',[$house]);
        $sum=0;
        $div=0;
        foreach ($data as $d){
            $sum = $sum + $d->rate;
            $div = $div + 1;
        }
        if($div==0){
            $avg=$sum/1;
        }
        else
        {
            $avg=(int)(($sum/$div));
            House::where('id', $house)
                ->update(['rate' =>$avg]);
        }
        //end update
        session()->flash('deleteEvaluationUser','success delete Evaluate...Thanks');
        return redirect('/My_Profile');

    }
    public function evaluationUser($idUserEvaluate,$idUser){
        DB::delete('delete from evaluation_users  where idUserEvaluate=? and idUser=?',[$idUserEvaluate,$idUser]);
        //update avg to add table houses

        $data=DB::select('select rate from evaluation_users where idUser=?',[$idUser]);
        $sum=0;
        $div=0;
        foreach ($data as $d){
            $sum = $sum + $d->rate;
            $div = $div + 1;
        }
        if($div==0){
            $avg=$sum/1;
        }
        else
        {
            $avg=(int)(($sum/$div));
            User::where('id', $idUser)
                ->update(['rateUSer' =>$avg]);
        }
        //end update
        session()->flash('deleteEvaluationHouse','success delete Evaluate...Thanks');
        return redirect('/My_Profile');

    }


}
