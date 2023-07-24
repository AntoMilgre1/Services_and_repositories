<?php

namespace App\Services;

use App\Model\Request;
use App\Repository\RequestRepository;

class RequestService{
    
        public static function create($data){
            $res= RequestRepository::create($data);
            // return $res;
              

        }
        public static function read($id){
    
            $details=RequestRepository::read($id);
            return $details;

        }
        public static function update($id){
            RequestRepository::update($id);
           
        }
        public static function delete($id){
            RequestRepository::delete($id);
        }
    }
