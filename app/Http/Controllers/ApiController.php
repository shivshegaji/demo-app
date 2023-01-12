<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    //

    public function getCarTime(Request $request, $time){

        $validator = Validator::make(['time' => $time],[
            'time' => 'required|min:1|max:999',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()],422);
        }

        $res = carTime($time);
        return response()->json(['current_time' =>$res],200);
    }
}
