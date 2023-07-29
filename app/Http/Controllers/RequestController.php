<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestService;
use Log;

class RequestController extends Controller
{
  
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests=RequestService::index();
        return $requests;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            RequestService::create($request->all());
       
            return response()->json(['status' => true, 'message' => 'new Request Created','data'=>$request->all()],200);

        }catch(Exception $e)
        {
        return response()->json(['status' => false, 'message' => 'new Request Cannot Created', 'data' => []],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $individualRequest=RequestService::show($id);
       return response()->json(['status'=>true,
                                 'message'=>'request Data',
                                 'data'=>$individualRequest],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=RequestService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RequestService::delete($id);
        return response()->json(['status'=>true,
                                 'messege'=>'Deleted']);
    }
}
