<?php

namespace App\Repository;

use App\Models\Company;

class CompanyRepository {
    public static function index(){
        $companies = Company::all();
        return $companies;
    }
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
            return $company;
    }
    public static function show($id){
        $individualCompany=Company::where('id',$id)->first();
        return $individualCompany;
    }
    public static function update($data){
            $company=Company::where('id',$data['id'])->first();
            $company->update($data);
            return $company;
    }
    public static function delete($id){
        Company::where('id',$id)->delete();
    }
}