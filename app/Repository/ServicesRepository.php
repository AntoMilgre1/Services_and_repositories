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
    public static function read($id){

        $details=Services::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=Services::where('id',$id)->get();
            $change->description        = $id['description'];
            $change->company_id         = $id['company_id'];
            $change->image              = $id['image'];
            $change->pricing_type_id    = $id['pricing_type_id'];
           
            $change->save();
            return $change;
           
    }
    public static function delete($id){
        $drop=Services::where('id',$id)->delete();
    }
}