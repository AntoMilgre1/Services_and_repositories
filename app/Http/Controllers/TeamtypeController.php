<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeamTypeService;

class TeamtypeController extends Controller
{
    //
    public static function create(Request $request){
        $data=TeamTypeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    
      
    }
    public static function read($id){
       $details=TeamTypeService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update(Request $request){
        $new=TeamTypeService::update($request->all());
        return response()->json(['status'=>true,'message' => 'updated','data'=>$new]);
    }
    public static function delete($id){
        TeamTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
