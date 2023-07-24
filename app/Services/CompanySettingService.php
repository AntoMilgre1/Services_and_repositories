<?php

namespace App\Services;

use App\Repository\CompanySettingRepository;

class CompanySettingService{
    public static function create($data){
        $details=CompanySettingRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=CompanySettingRepository::read($id);
        return $details;

    }
    public static function update($id){
        CompanySettingRepository::update($id);
       
    }
    public static function delete($id){
        CompanySettingRepository::delete($id);
    }
}