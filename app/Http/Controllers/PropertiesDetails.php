<?php

namespace App\Http\Controllers;

use App\Events\Send;
use App\Models\House;
use App\Models\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PropertiesDetails extends Controller
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
    public function showPropertiesDetails($id)
    {
        $userPrevent=DB::select('select * from reverses where idUser=? and confirm=0',[Auth::user()->id]);
        if ($userPrevent == null){
            $show=0;
        }else{
            $show=1;
        }
        $detail=DB::select('select * from houses where id=?',[$id]);
        return view('home.properties-detail',compact('detail','id','show'));

    }
    public function opinion($id)
    {
        $opinion=DB::select('select * from users,opinions where users.id=opinions.idUser and opinions.idHouse=?',[$id]);
        return view('home.opinion',compact('opinion'));
    }

    public function addOpinion(Request $request,$id){
        $x= new Opinion();
        $x->idUser=Auth::user()->id;
        $x->idHouse=$id;
        $x->opinion=$request->opinion;
        $x->save();
        session()->flash('opinion','Success add opinion...GOOD');
        return redirect('/Opinion_User/'.$id);


    }
    public function deleteOpinion($idOpinion,$idHouse){
        DB::delete('delete from opinions where id=?',[$idOpinion]);
        session()->flash('deleteOpinion','Success delete opinion...GOOD');
        return redirect('/Opinion_User/'.$idHouse);
    }
   public function test()
    {
      return view('home.index');
    }

    public function testt()
    {
        event(new Send());

    }
  }
