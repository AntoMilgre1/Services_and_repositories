<?php

namespace App\Services;
use App\Repository\ServicesRepository;

class ServicesService{
    public static function index(){
        $services=ServicesRepository::index();
        return $services;
    }
    public static function create($data){
        $details=ServicesRepository::create($data);
        return $details;
    }
    public static function show($id){
    
        $details=ServicesRepository::show($id);
        return $details;

    }
    public static function update($data){
        $services=ServicesRepository::update($data);
        return $services;
       
    }
    public static function delete($id){
        ServicesRepository::delete($id);
    }
}