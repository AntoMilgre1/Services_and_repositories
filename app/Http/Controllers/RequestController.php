<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestService;
use Log;

class RequestController extends Controller
{
    public static function create(Request $request){
        try{
            RequestService::create($request->all());
       
            return response()->json(['status' => true, 'message' => 'new Request Created','data'=>$request->all()],200);

        }catch(Exception $e)
        {
        return response()->json(['status' => false, 'message' => 'new Request Cannot Created', 'data' => []],500);
        }

       
    }
    public static function read($id){

        $details=RequestService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
            RequestService::update($id);
            return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        RequestService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
