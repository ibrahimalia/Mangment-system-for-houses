<?php

namespace App\Http\Controllers;

use App\Models\EvaluationUser;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Evaluation extends Controller
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

    public function evaluation($id)
    {
        $testId = DB::select('select id from houses where id=?', [$id]);
        if ($testId==null) {
            return view('home.404');

        } else {
            $user = Auth::user()->id;
            $data = DB::select('select rate from evaluations where idUser=? and idHouse=?', [$user, $id]);
            if ($data == null) {
                $show = 0;
            } else {
                $show = 1;
            }
            return view('home.Evaluation', compact('id', 'show'));
        }
    }

    public function addEvaluation(Request $request,$id)
    {
        $x=new \App\Models\Evaluation();
        $x->idUser=Auth::user()->id;
        $x->idHouse=$id;
        $fields = $request->rate;
        if($fields == 1){
            $x->rate=$fields ;
        }
        else if ($fields == 2){
            $x->rate=$fields ;
        }
        else if ($fields == 3){
            $x->rate=$fields ;
        }
        else if ($fields == 4){
            $x->rate=$fields ;
        }
        else if ($fields == 5){
            $x->rate=$fields ;
        }
        $x->save();
        //update avg to add table houses
        $house=$id;
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
        return redirect('/confirm/'.$id);
    }


    public function evaluateUser($idUser)
    {

        $testId = DB::select('select id from users where id=?', [$idUser]);
        if ($testId==null) {
            return view('home.404');
        } else
            {
            $user = Auth::user()->id;
            $data = DB::select('select rate from evaluation_users where idUserEvaluate=? and idUser=? ', [$user,$idUser]);
            if ($data == null) {
                $show = 0;
            } else {
                $show = 1;
            }
            return view('home.EvaluateUser',compact('idUser','show'));
            }

    }
    public  function addEvaluateUser(Request $request,$idUser){

        $x= new EvaluationUser();
        $x->idUserEvaluate=Auth::user()->id;
        $x->idUser=$idUser;
        $fields = $request->rate;
        if($fields == 1){
            $x->rate=$fields ;
        }
        else if ($fields == 2){
            $x->rate=$fields ;
        }
        else if ($fields == 3){
            $x->rate=$fields ;
        }
        else if ($fields == 4){
            $x->rate=$fields ;
        }
        else if ($fields == 5){
            $x->rate=$fields ;
        }
        $x->save();
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
        session()->flash('evaluateUser','Success Evaluate');
        return redirect('/Evaluate_User/'.$idUser);

    }

}
