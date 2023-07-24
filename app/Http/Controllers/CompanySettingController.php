<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanySettingService;

class CompanySettingController extends Controller
{
    //
    
   
    
    public static function create(Request $request){
        CompanySettingService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);

    
      
    }
    public static function read($id){
        $details=CompanySettingService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
        CompanySettingService::update($id);
        return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        CompanySettingService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}


