<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\servicesOntimeService;

class ServicesOntimeController extends Controller
{
    //

    //
    public static function create(Request $request){
        servicesOntimeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);

    
      
    }
    public static function read($id){
       $details=servicesOntimeService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
        servicesOntimeService::update($id);
        return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        servicesOntimeService ::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}



