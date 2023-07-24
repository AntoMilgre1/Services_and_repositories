<?php

namespace App\Services;

use App\Repository\CompanyRepository;

class CompanyService{
    public static function create($data){
        $details=CompanyRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=CompanyRepository::read($id);
        return $details;

    }
    public static function update($id){
        CompanyRepository::update($id);
       
    }
    public static function delete($id){
        CompanyRepository::delete($id);
    }
}