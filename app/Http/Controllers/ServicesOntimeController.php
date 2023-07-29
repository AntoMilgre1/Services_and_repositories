<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\servicesOntimeService;

class ServicesOntimeController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicesOntime=servicesOntimeService::index();
        return $servicesOntime;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=servicesOntimeService::store($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $individualData=servicesOntimeService::show($id);
        return response()->json(['data'=>$individualData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=servicesOntimeService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        servicesOntimeService ::delete($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Deleted']);
    }
    
   
}



