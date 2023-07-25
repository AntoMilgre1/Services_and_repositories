<?php 

namespace App\Repository;

use App\Models\CompanySettingType;

class CompanySettingTypeRepository {
    public static function create($data){
          
            
            $CompanySettingType = new CompanySettingType();
            $CompanySettingType->name                = $data['name'];

            $CompanySettingType->save();
            // return 'success';



    }
    public static function read($id){

        $details=CompanySettingType::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $CompanySettingType=CompanySettingType::where('id',$id)->get();

            $CompanySettingType->name                = $id['name'];
            $CompanySettingType->save();
           return $CompanySettingType;
    }
    public static function delete($id){
        $drop=CompanySettingType::where('id',$id)->delete();
    }
}