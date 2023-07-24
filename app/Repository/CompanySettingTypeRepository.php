<?php 

namespace App\Repository;

use App\Models\CompanySettingType;

class CompanySettingTypeRepository {
    public static function create($data){
          
            
            $request = new CompanySettingType();
            $request->name                = $data['name'];

            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=CompanySettingType::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=CompanySettingType::where('id',$id)->update(['company_id'=>2323]);
           
    }
    public static function delete($id){
        $drop=CompanySettingType::where('id',$id)->delete();
    }
}