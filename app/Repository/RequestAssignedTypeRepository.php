<?php

namespace  App\Repository;

use App\Models\RequestAssignedType;

class RequestAssignedTypeRepository{
    public static function create($data){
          
            
        $request = new RequestAssignedType;
        $request->name = $data['name'];
        
       
        $request->save();
        // return 'success';



    }
        public static function read($id){

        $details=RequestAssignedType::where('id',$id)->get();
        return $details;

    }
        public static function update($id){
        $change=RequestAssignedType::where('id',$id)->update(['name'=>2323]);
       
    }
        public static function delete($id){
        $drop=RequestAssignedType::where('id',$id)->delete();
    }
}