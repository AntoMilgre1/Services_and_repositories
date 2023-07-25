<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestAssignedTypeService;

class RequestAssignedTypeController extends Controller
{
    //
    public static function create(Request $request){
        $data=RequestAssignedTypeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    
      
    }
    public static function read($id){
        $details=RequestAssignedTypeService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update(Request $request){
        $new=RequestAssignedTypeService::update($request->all());
        return response()->json(['status'=>true,'message' => 'updated','data'=>$new]);
    }
    public static function delete($id){
        RequestAssignedTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
