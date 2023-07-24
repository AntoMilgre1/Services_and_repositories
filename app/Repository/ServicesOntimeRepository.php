<?php
namespace App\Repository;

use App\Models\ServicesOntime;

class ServicesOntimeRepository {
    public static function create($data){
          
            
            $request = new ServicesOntime;
            $request->price = $data['price'];
            $request->purchase_limit = $data['purchase_limit'];
            
            $request->service_id = $data['service_id'];
           
            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=ServicesOntime::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=ServicesOntime::where('id',$id)->update(['company_id'=>2323]);
           
    }
    public static function delete($id){
        $drop=ServicesOntime::where('id',$id)->delete();
    }
}