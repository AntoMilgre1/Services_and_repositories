<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanySettingTypeService;

class CompanySettingTypeController extends Controller
{
    
    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companysettingtypes=CompanySettingTypeService::index();
        return $companysettingtypes;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CompanySettingTypeService::create($request->all());
        return response()->json(['status'=>true,
                                 'messege'=>'new data created',
                                 'data'=>$request->all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $details=CompanySettingTypeService::read($id);
        return response()->json(['data'=>$details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new=CompanySettingTypeService::update($request->all());
        return response()->json(['status'=>true,'message' => 'updated','data'=>$new]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CompanySettingTypeService::delete($id);
        return response()->json(['messege'=>'Deleted']);
    }
    
}
