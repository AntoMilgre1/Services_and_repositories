<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeamTypeService;

class TeamtypeController extends Controller
{
    //
    public static function create(Request $request){
        TeamTypeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);

    
      
    }
    public static function read($id){
       $details=TeamTypeService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
        TeamTypeService::update($id);
        return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        TeamTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
