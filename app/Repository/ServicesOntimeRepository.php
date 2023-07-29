<?php
namespace App\Repository;

use App\Models\ServicesOntime;

class ServicesOntimeRepository {
    public static function index(){
        $ServicesOntime=ServicesOntime::all();
        return $ServicesOntime;

    }

    public static function store($data){
          
            
            $ServicesOntime = new ServicesOntime;
            $ServicesOntime->price = $data['price'];
            $ServicesOntime->purchase_limit = $data['purchase_limit'];
            
            $ServicesOntime->service_id = $data['service_id'];
           
            $ServicesOntime->save();
            // return 'success';



    }
    public static function show($id){

        $details=ServicesOntime::where('id',$id)->first();
        return $details;

    }
    public static function update($data){
            $ServicesOntime=ServicesOntime::where('id',$data['id'])->first();
            $ServicesOntime->update($data);
            return $ServicesOntime;
           
    }
    public static function delete($id){
        $drop=ServicesOntime::where('id',$id)->delete();
    }
}