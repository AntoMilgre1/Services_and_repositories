<?php 

namespace App\Repository;

use App\Models\CompanySettingType;

class CompanySettingTypeRepository {
    public static function index(){
        $CompanySettingType=CompanySettingType ::all();
        return $CompanySettingType;       

    }
    public static function create($data){
          
            
            $CompanySettingType = new CompanySettingType();
            $CompanySettingType->name                = $data['name'];

            $CompanySettingType->save();
            // return 'success';



    }
    public static function read($id){

        $details=CompanySettingType::where('id',$id)->first();
        return $details;

    }
    public static function update($data){
            $CompanySettingType=CompanySettingType::where('id',$data['id'])->first();

            $CompanySettingType->update($data);
           return $CompanySettingType;
    }
    public static function delete($id){
        $drop=CompanySettingType::where('id',$id)->delete();
    }
}