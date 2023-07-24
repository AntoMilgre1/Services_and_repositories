<?php

namespace App\Repository;

use App\Models\Company;

class CompanyRepository {
    public static function create($data){
          
            
            $company = new Company;
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
            // return 'success';



    }
    public static function read($id){

        $individualCompany=Company::where('id',$id)->get();
        return $individualCompany;

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
        Company::where('id',$id)->delete();
    }
}