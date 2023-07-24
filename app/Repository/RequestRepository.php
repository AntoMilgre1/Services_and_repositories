<?php

namespace App\Repository;
use App\Models\Request;
use Log;

class RequestRepository {
    public static function create($data){
          
            
            $request = new Request;
            $request->company_id = $data['company_id'];
            $request->client_id = $data['client_id'];
            $request->request_initiated_id = $data['request_initiated_id'];
            $request->title = $data['title'];
            $request->request_status = $data['request_status'];
            $request->priority_id = $data['priority_id'];
            $request->due_at = $data['due_at'];
            $request->archive = $data['archive'];
            $request->save();
            // return 'success';



    }
    public static function read($id){

        $details=Request::where('id',$id)->get();
        return $details;

    }
    public static function update($id){
            $change=Request::where('id',$id)->update(['company_id'=>2323]);
           
    }
    public static function delete($id){
        $drop=Request::where('id',$id)->delete();
    }
}