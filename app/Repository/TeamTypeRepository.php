<?php

namespace App\Repository;

use App\Models\TeamType;

class TeamTypeRepository{
    public static function create($data){
          
            
        $request = new TeamType;
        $request->naame = $data['name'];
        
       
        $request->save();
        // return 'success';



    }
        public static function read($id){

        $details=TeamType::where('id',$id)->get();
        return $details;

    }
        public static function update($id){
        $change=TeamType::where('id',$id)->get();
        $change->naame = $id['naame'];
        
       
        $change->save();
        return $change;
       
    }
        public static function delete($id){
        $drop=TeamType::where('id',$id)->delete();
    }
}


