<?php

namespace App\Repository;

use App\Models\Services;

class ServicesRepository {


    public static function create($data){
          
            
            $request = new Services;
            $request->description = $data['description'];
            $request->company_id = $data['company_id'];
            $request->image = $data['image'];
            $request->pricing_type_id = $data['pricing_type_id'];
           
            $request->save();
            // return 'success';



    }
    public static function show($id){

        $details=Services::where('id',$id)->first();
        return $details;

    }
    public static function update($data){
            $newServices=Services::where('id',$data['id'])->first();
            $newServices->update($data);
            return $newServices;
           
    }
    public static function delete($id){
        $drop=Services::where('id',$id)->delete();
        
    }
    public static function index(){
        $services=Services::all();
        return $services;
    }
}