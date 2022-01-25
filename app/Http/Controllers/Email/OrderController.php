<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Mail\OrderStarted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
  /*  public function start(Request $request , $id)
    {
       Mail::to($request->user())->send(new OrderStarted($id));
       return 'aaa';
    }*/
}
