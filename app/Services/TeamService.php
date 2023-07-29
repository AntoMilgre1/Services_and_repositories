<?php

namespace App\Services;

use App\Repository\TeamRepository;

class TeamService{
    public static function index(){
        $teams=TeamRepository::index();
        return $teams;
    }
    public static function store($data){
        $details=TeamRepository::store($data);
        return $details;
    }
    public static function show($id){
    
        $details=TeamRepository::show($id);
        return $details;

    }
    public static function update($data){
        TeamRepository::update($data);
       
    }
    public static function delete($id){
        TeamRepository::delete($id);
    }
}