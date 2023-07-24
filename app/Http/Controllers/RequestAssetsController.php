<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestAssetsService;

class RequestAssetsController extends Controller
{
    //
    public static function create(Request $request){
        $data=RequestAssetsService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    
      
    }
    public static function read($id){
       $details=RequestAssetsService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
        RequestAssetsService::update($id);
        return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        RequestAssetsService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
