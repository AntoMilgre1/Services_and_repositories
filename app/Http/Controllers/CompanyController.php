<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyService;

class CompanyController extends Controller
{
 
   
    //
    public static function create(Request $request){

       
        $company = CompanyService::create($request->all());
        return response()->json(['status'=>true,
                                 'message'=>'New Company Created',
                                 'data'=>$company],200);   

    }
    public static function read($id){
        $individualCompany=CompanyService::read($id);
        return response()->json(['status'=>true,
                                 'message'=>'Company Data',
                                 'data'=>$individualCompany],200);
    }
    public static function update(Request $request){
        $company = CompanyService::update($request->all());
        return response()->json(['status'=>true,
                                 'message'=>'Company Data Updated',
                                 'data'=>$company],200);
    }
    public static function delete($id){
        CompanyService::delete($id);
        return response()->json(['status'=>true,
                                 'message'=>'Company Data Deleted'
                             ],204);
    }
}


