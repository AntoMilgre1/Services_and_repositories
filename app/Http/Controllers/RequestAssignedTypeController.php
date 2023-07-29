<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestAssignedTypeService;

class RequestAssignedTypeController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requestAssignedType=RequestAssignedTypeService::index();
        return $requestAssignedType;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=RequestAssignedTypeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$data]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $details=RequestAssignedTypeService::show($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Request Assigned Type data',
                                 'data'=>$details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=RequestAssignedTypeService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RequestAssignedTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    
   
}
