<?php

namespace  App\Repository;

use App\Models\RequestAssignedType;

class RequestAssignedTypeRepository{
    public static function create($data){
          
            
        $requesAssignedType = new RequestAssignedType;
        $requesAssignedType->name = $data['name'];
        
       
        $requesAssignedType->save();
        return $requesAssignedType;



    }
        public static function show($id){

        $details=RequestAssignedType::where('id',$id)->first();
        return $details;

    }
        public static function update($data){
        $requesAssignedType=RequestAssignedType::where('id',$data['id'])->first();
        $requesAssignedType->update();

       
    }
        public static function delete($id){
        $drop=RequestAssignedType::where('id',$id)->delete();
    }
        public static function index(){
        $requesAssignedType=RequestAssignedType::all();
        return $requesAssignedType;
    }
}