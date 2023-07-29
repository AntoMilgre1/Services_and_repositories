<?php

namespace App\Repository;

use App\Models\RequestAssets;

class RequestAssetsRepository {
    public static function index(){
        $requestAssets=RequestAssets::all();
        return $requestAssets;
    }
    public static function create($data){

        $requestAssets=new RequestAssets;
        $requestAssets->file_name=$data['file_name'];
        $requestAssets->type=$data['type'];
        $requestAssets->save();
        
    }
    public static function show($id){

        $details=RequestAssets::where('id',$id)->first();
        return $details;

    }
    public static function update($data){
            $requestAssets=RequestAssets::where('id',$data['id'])->first();
            $requestAssets->update($data);
            
           
    }
    public static function delete($id){
        $drop=RequestAssets::where('id',$id)->delete();
    }
    
}