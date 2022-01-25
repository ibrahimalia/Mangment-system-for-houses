<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Reverse;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
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

    public function dashboard(){
        return view('admin.dashbord');
    }

    public function registered(){
$users =User::all();
    return view('admin.register')->with('users',$users);

}

    public function registerededit(Request $request ,$id){
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);

    }
    public function registeredupdate(Request $request ,$id){
        $users =User::find($id);
        $r=$request->input('name');
        $users->name =  $request->input('txtEmployeeNo');

        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/role-register')->with('status','you are update user');

    }


    public function registeredblock(Request $request ,$id){
        $users = User::findOrFail($id);


        if ($users->active==0)
        {
            $users->active=1;
            $users->update();
            return redirect('/role-register')->with('status','you are Active user');

        }
        elseif ($users->active==1)
        {
            $users->active=0;
            $users->update();
            return redirect('/role-register')->with('status','you are block user');

        }


    }

    public function registereddelete(Request $request ,$id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status','you are delete user');

    }



    ////////////////////////////////////////////
    ///
    public function reversed(){
        $users =Reverse::all();
        return view('admin.reversed')->with('users',$users);

    }

    public function reversededit(Request $request ,$id){
        $users = Reverse::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);

    }
    public function reversedupdate(Request $request ,$id){
        $users =Reverse::find($id);
        $r=$request->input('name');
        $users->name =  $request->input('txtEmployeeNo');

        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/role-register')->with('status','you are update user');

    }

    public function reverseddelete(Request $request ,$id){
        $revers = Reverse::findOrFail($id);
        $revers->delete();
        return redirect('/role-reverses')->with('status','you are delete user');

    }


    public function reversedconfirm(Request $request ,$id){
        $reverse = Reverse::findOrFail($id);


        if ($reverse->confirm==0)
        {
            $reverse->confirm=1;
            $reverse->update();
            return redirect('/role-reverses')->with('status','you are Active user');

        }
        elseif ($reverse->confirm==1)
        {
            $reverse->confirm=0;
            $reverse->update();
            return redirect('/role-reverses')->with('status','you are block user');

        }


    }
    ///////////////////////


    public function profile(Request $request ){
        $id = Auth::user()->id;
        $users = User::findOrFail($id);
        return view('profile')->with('user',$users);

    }

}
