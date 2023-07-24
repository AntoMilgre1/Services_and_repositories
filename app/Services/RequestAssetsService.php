<?php

namespace App\Services;

use App\Models\RequestAssets;
 use App\Repository\RequestAssetsRepository;

class RequestAssetsService{
    public static function create($data){
        $details=RequestAssetsRepository::create($data);
        return $details;
    }
    public static function read($id){
    
        $details=RequestAssetsRepository::read($id);
        return $details;

    }
    public static function update($id){
        RequestAssetsRepository::update($id);
       
    }
    public static function delete($id){
        RequestAssetsRepository::delete($id);
    }
}