<?php

namespace App\Services;

use App\Model\Request;
use App\Repository\RequestRepository;

class RequestService{
    public static function index(){
        $requests= RequestRepository::index();
        return $requests;
        // return $res;
          

    }
    
        public static function create($data){
            $requests= RequestRepository::create($data);
            return $requests;
            // return $res;
              

        }
        public static function show($id){
    
            $details=RequestRepository::show($id);
            return $details;

        }
        public static function update($data){
            $newRequest=RequestRepository::update($data);
            return $newRequest;
           
        }
        public static function delete($id){
            RequestRepository::delete($id);
        }
    }
