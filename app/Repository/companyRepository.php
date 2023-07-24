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
        $company=Company::where('id',$id)->get();
        $company->name                      = $data['name'];
        $company->address_1                 = $data['address_1'];
        $company->address_2                 = $data['address_2'];
        $company->city                      = $data['city'];
        $company->state                     = $data['state'];
        $company->country                   = $data['country'];
        $company->zip_code                  = $data['zip_code'];
        $company->primary_phone_no          = $data['primary_phone_no'];
        $company->primary_email_address     = $data['primary_email_address'];
        $company->language_id               = $data['language_id'];
        $company->logo                      = $data['logo'];

        $company->save();

       return $company;
           
    }
    public static function delete($id){
        $drop=Company::where('id',$id)->delete();
    }
}