<?php

namespace App\Services;

use App\Repository\TeamTypeRepository;

class TeamTypeService{
    public static function index(){
        $teamTypes=TeamTypeRepository::index();
        return $teamTypes;
    }
    public static function store($data){
        $details=TeamTypeRepository::store($data);
        return $details;
    }
    public static function show($id){
    
        $details=TeamTypeRepository::show($id);
        return $details;

    }
    public static function update($data){
        $teamType=TeamTypeRepository::update($data);
        return $teamType;
       
    }
    public static function delete($id){
        TeamTypeRepository::delete($id);
    }

}

