<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeamService;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=TeamService::index();
        return $teams;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team=TeamService::store($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$team]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $individualTeam=TeamService::show($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Team Data',
                                 'data'=>$individualTeam]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newTeam=TeamService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$newTeam]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TeamService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    
    
}
