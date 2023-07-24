<?php

namespace App\Services;

use App\Repository\TeamRepository;

class TeamService{
    public static function create($data){
        $details=TeamRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=TeamRepository::read($id);
        return $details;

    }
    public static function update($id){
        TeamRepository::update($id);
       
    }
    public static function delete($id){
        TeamRepository::delete($id);
    }
}