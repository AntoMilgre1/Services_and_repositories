<?php

namespace App\Services;

use App\Repository\TeamTypeRepository;

class TeamTypeService{
    public static function create($data){
        $details=TeamTypeRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=TeamTypeRepository::read($id);
        return $details;

    }
    public static function update($id){
        TeamTypeRepository::update($id);
       
    }
    public static function delete($id){
        TeamTypeRepository::delete($id);
    }

}

