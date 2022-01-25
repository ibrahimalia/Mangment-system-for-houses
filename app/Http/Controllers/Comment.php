<?php

namespace App\Http\Controllers;
use App\Events\Send;
use App\Models\Advertising;
use App\Models\Replay;
use App\Models\User;
use App\Notifications\PostNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class Comment extends Controller
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
    public function comment($idPost)
    {
        $post=DB::select('select * from users,comments where comments.idUser=users.id and comments.idPost=? order by comments.timeComment',[$idPost]);
        $user=DB::select('select * from users,advertisings where users.id=advertisings.idUser and advertisings.id=?',[$idPost]);
        $numReplay=DB::select('select idComment from replays');
        return view('home.comment',compact('user','idPost','post','numReplay'));
    }
    public function addComment(Request $request)
    {

        $description=$request->description;
        $time=$request->time;
        $id=$request->id;
        $user=User::find(Auth::id());
        event(new Send($user,$description,$time,$id));
        //save comment in database
        $x=new \App\Models\Comment();
        $x->idUser=Auth::user()->id;
        $x->idPost=$request->id;
        $x->contentComment=$request->description;
        $x->timeComment=Carbon::now("Asia/Damascus");
        $x->save();
        //send notification
        $notification=User::get();
        $idPost=$request->id;
        $nameUser=Auth::user()->name;
        Notification::send($notification,new PostNotification($idPost,$nameUser));

    }
    public function delete($id,$idPost){
        $element=$id;
        $y=DB::delete('delete from comments,replays using comments,replays where comments.id=replays.idComment and comments.id=? and comments.idUser=?',[$element,Auth::user()->id]);
        $x=DB::delete('delete from comments where comments.id=? and comments.idUser=? ',[$element,Auth::user()->id]);
        return redirect('/comment/'.$idPost);

    }
    public  function update(){
        return view('home.UpdateComment');
    }
    public function addUpdate(Request $request,$id,$idPost){
        $update=DB::update('update comments set contentComment=? where comments.id=? and comments.idUser=?',[$request->text,$id,Auth::user()->id]);
        if ($update == 0){
            session()->flash('notUpdate','Field: not allow update this comment');
            return redirect('/comment/'.$idPost);
        }else{
            session()->flash('update','success: update your comment');
            return redirect('/comment/'.$idPost);
        }
    }
    public  function replay($id){
        $dataReplay=DB::select('select * from users,replays where users.id=replays.idUser and idComment=? order by replays.timeReplay DESC ',[$id]);
        return view('home.replay',compact('dataReplay'));
    }
    public  function addReplay(Request $request,$id,$idPost)
    {
     $x= new Replay();
     $x->idUser=Auth::user()->id;
     $x->idPost=$idPost;
     $x->idComment=$id;
     $x->contentReplay=$request->contentReplay;
     $x->timeReplay=Carbon::now("Asia/Damascus");
     $x->save();
     session()->flash('replay','success: Add your replay');
     return redirect('/comment/'.$idPost);
    }

    public  function deleteReplay($id,$idPost,$idReplay){
        $del=DB::delete('delete from replays using replays where  replays.id=? and replays.idUser=?',[$idReplay,Auth::user()->id]);
        if ($del == 0){
            return redirect('/add');
        }else{
            return redirect('/replay/'.$id.'/'.$idPost);
        }
    }
    public  function updateReplay(){
        return view('home.UpdateReplay');
    }
   public function addUpdateReplay(Request $request,$id,$idPost,$idReplay){
       $update=DB::update('update replays set contentReplay=? where replays.id=? and replays.idUser=?',[$request->contentReplay,$idReplay,Auth::user()->id]);
       if ($update == 0){
           return redirect('/add');
       }else{
           return redirect('/replay/'.$id.'/'.$idPost);
       }

   }







}
