<?php

namespace App\Repository;

use App\Models\RequestAssets;

class RequestAssetsRepository {
    public static function create($data){

        $request=new RequestAssets;
        $request->file_name=$data['file_name'];
        $request->type=$data['type'];
        $request->save();
        
    }
    public static function read($id){

        $details=RequestAssets::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=RequestAssets::where('id',$id)->update(['type'=>'false type']);
           
    }
    public static function delete($id){
        $drop=RequestAssets::where('id',$id)->delete();
    }
    
}