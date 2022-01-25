<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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
    public  function contact(){
        return view('home.Contact');
    }
    public  function addContact(Request $request){
        $x=new Contact();
        $x->idUser=Auth::user()->id;
        $x->Fname=$request->Fname;
        $x->Lname=$request->Lname;
        $x->emailUser=$request->emailUser;
        $x->typeProblem=$request->typeProblem;
        $x->message=$request->message;
        $x->save();
        session()->flash('addContact','Add message success');
        return redirect('/contact');



    }
}
