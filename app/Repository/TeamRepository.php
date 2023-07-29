<?php

namespace App\Repository;

use App\Models\Team;

class TeamRepository {
    public static function index(){
        $teams=Team::all();
        return $teams;
    }
    public static function store($data){
          
            
            $Team = new Team;
            $Team->name          = $data['name'];
            $Team->team_type     = $data['team_type'];
            $Team->company_id    = $data['company_id'];
            $Team->created_by    = $data['created_by'];
           
            $Team->save();
            // return 'success';



    }
    public static function show($id){

        $team=Team::where('id',$id)->first();
        return $team;

    }
    public static function update($data){
            $newTeam=Team::where('id',$data['id'])->first();
            $newTeam->update();
            return $newTeam;
           
    }
    public static function delete($id){
        $drop=Team::where('id',$id)->delete();
    }
}