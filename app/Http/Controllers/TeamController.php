<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeamService;

class TeamController extends Controller
{
    //
    public static function create(Request $request){
        $data=TeamService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    
      
    }
    public static function read($id){
       $details=TeamService::read($id);
        return response()->json(['data'=>$details]);
    }
    public static function update($id){
        TeamService::update($id);
        return response()->json(['message' => 'updated']);
    }
    public static function delete($id){
        TeamService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
}
