<?php

namespace App\Repository;

use App\Models\CompanySetting;

class CompanySettingRepository {
    public static function create($data){
          
            
            $companysetting = new CompanySetting();

            $companysetting->company_id                = $data['company_id'];
            $companysetting->setting_type_id           = $data['setting_type_id'];
            $companysetting->value                     = $data['value'];
            
            
            $companysetting->save();
            // return 'success';



    }
    public static function read($id){

        $details=CompanySetting::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $companysetting=CompanySetting::where('id',$id)->get();
            $companysetting->company_id                = $id['company_id'];
            $companysetting->setting_type_id           = $id['setting_type_id'];
            $companysetting->value                     = $id['value'];
            $companysetting->save();

            return $companysetting;
            
           
    }
    public static function delete($id){
        $drop=CompanySetting::where('id',$id)->delete();
    }
}