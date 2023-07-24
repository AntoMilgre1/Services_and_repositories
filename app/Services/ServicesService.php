<?php

namespace App\Services;
use App\Repository\ServicesRepository;

class ServicesService{
    public static function create($data){
        $details=ServicesRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=ServicesRepository::read($id);
        return $details;

    }
    public static function update($id){
        ServicesRepository::update($id);
       
    }
    public static function delete($id){
        ServicesRepository::delete($id);
    }
}