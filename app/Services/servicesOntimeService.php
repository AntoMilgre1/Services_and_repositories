<?php

namespace App\Services;

use App\Repository\ServicesOntimeRepository;

class servicesOntimeService{
    public static function index(){
        $servicesOntime=ServicesOntimeRepository::index();
        return $servicesOntime;
    }
    public static function store($data){
        $details=ServicesOntimeRepository::store($data);
        return $details;
    }
    public static function show($id){
    
        $details=ServicesOntimeRepository::show($id);
        return $details;

    }
    public static function update($data){
       $newData= ServicesOntimeRepository::update($data);
       return $newData;
       
    }
    public static function delete($id){
        ServicesOntimeRepository::delete($id);
    }
}