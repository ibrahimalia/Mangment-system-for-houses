<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Abouts;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class AboutusController extends Controller
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
    public function index(){
        $abouts=Abouts::all();

        return view('admin.aboutus')->with('abouts',$abouts);
    }

    public function store(Request $request){
        $about=new Abouts;
        $about->title=$request->input('title');
        $about->subtitle=$request->input('subtitle');
        $about->description=$request->input('description');
        $about->save();
        return redirect('/abouts')->with('status','you are add about us sucess')->with('statuscode','success');




    }
    public function aboutedit(Request $request ,$id){
        $abouts = Abouts::findOrFail($id);
        return view('admin.abouts-edit')->with('abouts',$abouts);

    }
    public function aboutupdate(Request $request ,$id){
        $abouts =Abouts::find($id);
        $r=$request->input('name');
        $abouts->title =  $request->input('title');

        $abouts->title =  $request->input('subtitle');
        $abouts->description =  $request->input('description');
        $abouts->update();
        return redirect('/abouts')->with('status','you are update user')->with('statuscode','info');

    }
    public function aboutdelete(Request $request ,$id){
        $abouts = Abouts::findOrFail($id);
        $abouts->delete();

        return redirect('/abouts')->with('status','you are delete user')->with('statuscode','error');

    }



}
