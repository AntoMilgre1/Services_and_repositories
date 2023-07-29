<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestAssetsService;

class RequestAssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requestAssets=RequestAssetsService::index();
        return $requestAssets;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=RequestAssetsService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $details=RequestAssetsService::show($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Request Assets Daata',
                                'data'=>$details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=RequestAssetsService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RequestAssetsService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    
   
}
