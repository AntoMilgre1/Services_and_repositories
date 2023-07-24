<?php

namespace App\Services;

use App\Repository\CompanyRepository;

class CompanyService{
    public static function create($data){
        $company=CompanyRepository::create($data);
        return $company;
    }
    public static function read($id){
    
        $individualCompany=CompanyRepository::read($id);
        return $individualCompany;

    }
    public static function update($data){
       $company= CompanyRepository::update($data);
       return $company;
       
    }
    public static function delete($id){
        CompanyRepository::delete($id);
    }
}