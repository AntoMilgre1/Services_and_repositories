<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyService;

class CompanyController extends Controller
{
 
   
    //
    public static function create(Request $request){
        CompanyService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);

    
      
    }
    public static function read($id){
        $details=CompanyService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
        CompanyService::update($id);
        return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        CompanyService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}


