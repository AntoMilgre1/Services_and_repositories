<?php

namespace App\Repository;

use App\Models\Company;

class CompanyRepository {
    public static function create($data){
          
            
            $request = new Company;
            $request->name                      = $data['name'];
            $request->address_1                 = $data['address_1'];
            $request->address_2                 = $data['address_2'];
            $request->city                      = $data['city'];
            $request->state                     = $data['state'];
            $request->country                   = $data['country'];
            $request->zip_code                  = $data['zip_code'];
            $request->primary_phone_no          = $data['primary_phone_no'];
            $request->primary_email_address     = $data['primary_email_address'];
            $request->language_id               = $data['language_id'];
            $request->logo                      = $data['logo'];
           
            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=Company::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=Company::where('id',$id)->update(['company_id'=>2323]);
           
    }
    public static function delete($id){
        $drop=Company::where('id',$id)->delete();
    }
}