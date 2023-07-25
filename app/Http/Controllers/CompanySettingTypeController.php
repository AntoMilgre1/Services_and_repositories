<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanySettingTypeService;

class CompanySettingTypeController extends Controller
{
    //
    public static function create(Request $request){
        CompanySettingTypeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);

    
      
    }
    public static function read($id){
        $details=CompanySettingTypeService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update(Request $request){
        $new=CompanySettingTypeService::update($request->all());
        return response()->json(['status'=>true,'message' => 'updated','data'=>$new]);
    }
    public static function delete($id){
        CompanySettingTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
