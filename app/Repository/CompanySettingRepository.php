<?php

namespace App\Repository;

use App\Models\CompanySetting;

class CompanySettingRepository {

    public static function index(){
        $CompanySettings=CompanySetting::all();
        return $CompanySettings;
    }
    public static function store($data){
          
            
            $companysetting = new CompanySetting();

            $companysetting->company_id                = $data['company_id'];
            $companysetting->setting_type_id           = $data['setting_type_id'];
            $companysetting->value                     = $data['value'];
            
            
            $companysetting->save();
            // return 'success';



    }
    public static function show($id){

        $details=CompanySetting::where('id',$id)->first();
        return $details;

    }
    public static function update($data){
        $CompanySetting=CompanySetting::where('id',$data['id'])->first();
        $CompanySetting->update($data);
        return $CompanySetting;

            
           
    }
    public static function delete($id){
        $drop=CompanySetting::where('id',$id)->delete();
    }
}