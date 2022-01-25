<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoEvaluation extends Controller
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

    public function inforamtion($id)
    {
        //return rate house
        $rate=DB::select('select rate from houses where id=?',[$id]);
        foreach ($rate as $r){
            $avg = $r->rate;
        }

        //calculate all number evaluations
        $house=$id;
        $data=DB::select('select rate from evaluations where idHouse=?',[$house]);
        $div=0;
        foreach ($data as $d){
            $div = $div + 1;
        }
        // start avg for like users
        $like=DB::select('select rate from evaluations where idHouse=? and rate>3',[$house]);
        $div2=0;
        foreach ($like as $l){
            $div2 = $div2 + 1;
        }
        if($div2==0){
            $avg2=0;
        }
        else
        {
            $avg2=(int)(($div2/$div)*100);
        }
        //end like
        //start avg for dislike users
        $dislike=DB::select('select rate from evaluations where idHouse=? and rate<=3',[$house]);
        $div3=0;
        foreach ($dislike as $dis){
            $div3 = $div3 + 1;
        }
        if($div3==0){
            $avg3=0;
        }
        else
        {
            $avg3=(int)(($div3/$div)*100);
        }


        //end dislike

       return view('home.InfoEvaluation',compact('avg2','avg3','avg'));
    }

    public function reviewUser($idUser)
    {
        //return rate house
        $rate=DB::select('select rateUSer from users where id=?',[$idUser]);
        foreach ($rate as $r){
            $avg = $r->rateUSer;
        }

        //calculate all number evaluations

        $data=DB::select('select rate from evaluation_users where idUser=?',[$idUser]);
        $div=0;
        foreach ($data as $d){
            $div = $div + 1;
        }
        // start avg for like users
        $like=DB::select('select rate from evaluation_users where idUser=? and rate>3',[$idUser]);
        $div2=0;
        foreach ($like as $l){
            $div2 = $div2 + 1;
        }
        if($div2==0){
            $avg2=0;
        }
        else
        {
            $avg2=(int)(($div2/$div)*100);
        }
        //end like
        //start avg for dislike users
        $dislike=DB::select('select rate from evaluation_users where idUser=? and rate<=3',[$idUser]);
        $div3=0;
        foreach ($dislike as $dis){
            $div3 = $div3 + 1;
        }
        if($div3==0){
            $avg3=0;
        }
        else
        {
            $avg3=(int)(($div3/$div)*100);
        }


        //end dislike
        return view('home.ReviewUser',compact('idUser','avg','avg2','avg3'));
    }


}
