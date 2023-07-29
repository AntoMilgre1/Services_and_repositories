<?php

namespace App\Services;

use App\Repository\CompanyRepository;

class CompanyService{
    public static function index(){
        $companies=CompanyRepository::index();
        return $companies;
    }
    public static function create($data){
        $company=CompanyRepository::create($data);
        return $company;
    }
    public static function show($id){
    
        $individualCompany=CompanyRepository::show($id);
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