<?php

namespace App\Services;

use App\Repository\TeaamTypeRepository;

class TeamTypeService{
    public static function create($data){
        $details=TeaamTypeRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=TeaamTypeRepository::read($id);
        return $details;

    }
    public static function update($id){
        TeaamTypeRepository::update($id);
       
    }
    public static function delete($id){
        TeaamTypeRepository::delete($id);
    }

}

