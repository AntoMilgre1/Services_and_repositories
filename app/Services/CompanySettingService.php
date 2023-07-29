<?php

namespace App\Services;

use App\Repository\CompanySettingRepository;

class CompanySettingService{
    public static function index(){
        $CompanySettings=CompanySettingRepository::all();
        return $CompanySettings;
    }
    public static function store($data){
        $CompanySetting=CompanySettingRepository::store($data);
        return $CompanySetting;
    }
    public static function show($id){
    
        $CompanySetting=CompanySettingRepository::show($id);
        return $CompanySetting;

    }
    public static function update($data){
        $CompanySetting=CompanySettingRepository::update($data);
        return $CompanySetting;
       
    }
    public static function delete($id){
        CompanySettingRepository::delete($id);
    }
}