<?php
namespace App\Services;

use App\Repository\CompanySettingTypeRepository;


class CompanySettingTypeService{
    public static function index(){
        $details=CompanySettingTypeRepository::index();
        return $details;
    }
    public static function create($data){
        $details=CompanySettingTypeRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=CompanySettingTypeRepository::read($id);
        return $details;

    }
    public static function update($id){
        CompanySettingTypeRepository::update($id);
       
    }
    public static function delete($id){
        CompanySettingTypeRepository::delete($id);
    }
}