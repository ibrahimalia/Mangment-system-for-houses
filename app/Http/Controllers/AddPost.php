<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use App\Models\Like;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response as ResponseAlias;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddPost extends Controller
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
    public function AddPost()
    {
       return view('home.AddPost');
    }
    public function Add(Request $request)
    {
        $validatedData = $request->validate([
            'contentPost' => ['max:255'],
            'postImage' => ['max:2','min:1'],

        ]);
        $x=new Advertising();
        $x->idUser=Auth::user()->id;
        //add apartmentImage
        $image1 = $request->file('postImage');
        if ($request->hasFile('postImage')) :
            foreach ($image1 as $item1):
                $var1 = date_create();
                $time1 = date_format($var1, 'YmdHis');
                $imageName1 = $time1 . '-' . $item1->getClientOriginalName();
                $item1->move( 'postImage/', $imageName1);
                $arr1[] = $imageName1;
            endforeach;
            $im1 = implode(",", $arr1);
        else:
            $im1 = '';
        endif;
        $x->postImage=$im1;
        $x->contentPost=$request->contentPost;
        $dt = Carbon::now("Asia/Damascus");
        $x->time=$dt;
        $x->save();
        session()->flash('post','Success Add Post ...GOOD');
        return view('home.AddPost');
    }
    public function pass()
    {
        $user=Auth::user()->id;
        $test=DB::select('select idPost from likes where idUser=?',[$user]);
        $numLike=DB::select('select idPost from likes ');
        $numComment=DB::select('select idPost from comments ');
        $data=DB::select('select * from users,advertisings where users.id=advertisings.idUser order by advertisings.time DESC ');
        return view('test',compact('data','test','numLike','numComment'));

    }
    public function formSubmit(Request $request)
    {
        $x=new Like();
        $x->idUser=Auth::user()->id;
        $x->idPost=$request->x;
        $x->like=$request->name;
        $x->save();

    }
    public function deletePost($idPost){
        DB::delete('delete from advertisings where id=?',[$idPost]);
        DB::delete('delete from likes where idPost=?',[$idPost]);
        DB::delete('delete from comments where idPost=?',[$idPost]);
        DB::delete('delete from replays where idPost=?',[$idPost]);
        session()->flash('deletePost','Success Delete Post ...GOOD');
        return redirect('/add');

    }
}
