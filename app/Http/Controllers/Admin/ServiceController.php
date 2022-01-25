<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servisecat;
use Illuminate\Http\Request;

class ServiceController extends Controller
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

    public function index()
    {
        $services = Servisecat::all();
        return view('admin.services.index')->with('services', $services);;
    }

    public function create()
    {
        return view('admin.services.create');
    }


    public function store(Request $request)
    {
        $cat = new Servisecat;
        $cat->name = $request->input('namee');
        $cat->status = $request->input('status');
        $cat->description = $request->input('description');
        $cat->save();
        return redirect('/service-cat')->with('status', 'you are add about us sucess')->with('statuscode', 'success');


    }


    public function serviceedit(Request $request, $id)
    {
        $service = Servisecat::findOrFail($id);
        return view('admin.services.service-edit')->with('service', $service);

    }

    public function serviceupdate(Request $request, $id)
    {
        $service = Servisecat::find($id);
        $service->name = $request->input('name1');
        $service->status = $request->input('status');

        $service->description = $request->input('description');
        $service->update();
        return redirect('/service-cat')->with('status', 'you are update user')->with('statuscode', 'info');

    }



    public function servicedelete(Request $request ,$id){
        $service = Servisecat::findOrFail($id);
        $service->delete();

        return redirect('/service-cat')->with('status','you are delete service')->with('statuscode','error');

    }
}
