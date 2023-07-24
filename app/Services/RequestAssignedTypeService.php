<?php

namespace App\Services;

use App\Repository\RequestAssignedTypeRepository;

class RequestAssignedTypeService{
    
    public static function create($data){
        $res= RequestAssignedTypeRepository::create($data);
        // return $res;
          

    }
    public static function read($id){

        $details=RequestAssignedTypeRepository::read($id);
        return $details;

    }
    public static function update($id){
        RequestAssignedTypeRepository::update($id);
       
    }
    public static function delete($id){
        RequestAssignedTypeRepository::delete($id);
    }
}