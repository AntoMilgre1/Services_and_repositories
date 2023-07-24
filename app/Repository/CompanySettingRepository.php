<?php

namespace App\Repository;

use App\Models\CompanySetting;

class CompanySettingRepository {
    public static function create($data){
          
            
            $request = new CompanySetting();
            $request->company_id                = $data['company_id'];
            $request->setting_type_id           = $data['setting_type_id'];
            $request->value                     = $data['value'];
            
            
            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=CompanySetting::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=CompanySetting::where('id',$id)->update(['company_id'=>2323]);
           
    }
    public static function delete($id){
        $drop=CompanySetting::where('id',$id)->delete();
    }
}