<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanySettingService;

class CompanySettingController extends Controller
{
    //
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company_settings = CompanySettingService::index();
        return response()->json(['status'=>true,
                                 'message'=>'All Company Setting List',
                                 'data'=>$company_settings],200); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CompanySettingService::store($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $details=CompanySettingService::read($id);
        return response()->json(['data'=>$details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=CompanySettingService::update($request->all());
        return response()->json(['status'=>true,
                                 'message' => 'updated',
                                 'data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CompanySettingService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    }
    
   

