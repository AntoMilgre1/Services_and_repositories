<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ServicesService;

class ServicesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=ServicesService::index();
        return $services;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $services=ServicesService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$services]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $details=ServicesService::show($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Services Data',
                                 'data'=>$details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=ServicesService::update($request->all());
        return response()->json(['status'=>true,'message' => 'updated','data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ServicesService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    
    
    
}


