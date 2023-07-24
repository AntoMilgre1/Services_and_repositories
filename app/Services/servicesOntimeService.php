<?php

namespace App\Services;

use App\Repository\ServicesOntimeRepository;

class servicesOntimeService{
    public static function create($data){
        $details=ServicesOntimeRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=ServicesOntimeRepository::read($id);
        return $details;

    }
    public static function update($id){
        ServicesOntimeRepository::update($id);
       
    }
    public static function delete($id){
        ServicesOntimeRepository::delete($id);
    }
}