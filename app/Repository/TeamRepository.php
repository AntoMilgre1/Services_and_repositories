<?php

namespace App\Repository;

use App\Models\Team;

class TeamRepository {
    public static function create($data){
          
            
            $request = new Team;
            $request->name          = $data['name'];
            $request->team_type     = $data['team_type'];
            $request->company_id    = $data['company_id'];
            $request->created_by    = $data['created_by'];
           
            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=Team::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=Team::where('id',$id)->get();
            $change->name          = $id['name'];
            $change->team_type     = $id['team_type'];
            $change->company_id    = $id['company_id'];
            $change->created_by    = $id['created_by'];
           
            $change->save();
            return $change;
           
    }
    public static function delete($id){
        $drop=Team::where('id',$id)->delete();
    }
}