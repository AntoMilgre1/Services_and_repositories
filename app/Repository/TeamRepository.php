<?php

namespace App\Repository;

use App\Models\Team;

class TeamRepository {
    public static function create($data){
          
            
            $request = new Team;
            $request->name = $data['name'];
            $request->team_type = $data['team_type'];
            $request->company_id = $data['company_id'];
            $request->created_by = $data['created_by'];
           
            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=Team::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=Team::where('id',$id)->update(['company_id'=>2323]);
           
    }
    public static function delete($id){
        $drop=Team::where('id',$id)->delete();
    }
}