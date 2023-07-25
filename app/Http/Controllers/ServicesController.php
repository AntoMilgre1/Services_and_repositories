<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ServicesService;

class ServicesController extends Controller
{
   
    //
    public static function create(Request $request){
        $data=ServicesService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    
      
    }
    public static function read($id){
       $details=ServicesService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update(Request $request){
        $new=ServicesService::update($request->all());
        return response()->json(['status'=>true,'message' => 'updated','data'=>$new]);
    }
    public static function delete($id){
        ServicesService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}


