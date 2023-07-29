<?php

namespace App\Services;

use App\Repository\RequestAssignedTypeRepository;

class RequestAssignedTypeService{

    public static function index(){
        $requestAssignedType=RequestAssignedTypeRepository::index();
        return $requestAssignedType;
    }
    
    public static function create($data){
        $res= RequestAssignedTypeRepository::create($data);
         return $res;
          

    }
    public static function show($id){

        $details=RequestAssignedTypeRepository::show($id);
        return $details;

    }
    public static function update($data){
        RequestAssignedTypeRepository::update($data);
       
    }
    public static function delete($id){
        RequestAssignedTypeRepository::delete($id);
    }
}