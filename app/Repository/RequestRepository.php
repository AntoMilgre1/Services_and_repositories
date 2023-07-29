<?php

namespace App\Repository;
use App\Models\Request;
use Log;

class RequestRepository {

    public static function index(){
            $requests=Request::all();
            return $requests;

    }
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
    public static function show($id){

        $individualRequest=Request::where('id',$id)->first();
        return $individualRequest;

    }
    public static function update($data){
            $change=Request::where('id',$data['id'])->first();
            $change->update($data);
            return $change;
    }
    public static function delete($id){
        $drop=Request::where('id',$id)->delete();
    }
}