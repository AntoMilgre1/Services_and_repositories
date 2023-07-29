<?php

namespace App\Services;

use App\Models\RequestAssets;
 use App\Repository\RequestAssetsRepository;

class RequestAssetsService{
    public static function index(){
        $requestAssets=RequestAssetsRepository::index();
        return $requestAssets;
    }
    public static function create($data){
        $details=RequestAssetsRepository::create($data);
        return $details;
    }
    public static function show($id){
    
        $details=RequestAssetsRepository::show($id);
        return $details;

    }
    public static function update($data){
        $new=RequestAssetsRepository::update($data);
        return $new;
       
    }
    public static function delete($id){
        RequestAssetsRepository::delete($id);
    }
}