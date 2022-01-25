<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TestApi extends Controller
{
    public function exam()
    {
        $detail=DB::select('select * from evaluations ');
        return response()->json($detail);

    }

}
