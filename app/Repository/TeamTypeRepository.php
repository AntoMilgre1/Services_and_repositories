<?php

namespace App\Repository;

use App\Models\TeamType;

class TeamTypeRepository{
    public static function index(){
        $teamTypes=TeamType::all();
        return $teamTypes;
    }
    public static function store($data){
          
            
        $teamType = new TeamType;
        $teamType->naame = $data['name'];
        
       
        $teamType->save();
        // return 'success';



    }
        public static function show($id){

        $details=TeamType::where('id',$id)->first();
        return $details;

    }
        public static function update($data){
        $teamType=TeamType::where('id',$data)->first();
        $teamType->update($data);
       
    }
        public static function delete($id){
        $drop=TeamType::where('id',$id)->delete();
    }
}


