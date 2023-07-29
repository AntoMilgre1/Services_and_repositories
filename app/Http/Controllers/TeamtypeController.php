<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeamTypeService;

class TeamtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamTypes=TeamTypeService::index();
        return $teamTypes; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teamType=TeamTypeService::store($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$teamType]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teamType=TeamTypeService::show($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Team Type Data',
                                 'data'=>$details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=TeamTypeService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TeamTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    
    
}
