<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyService;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = CompanyService::index();
        return response()->json(['status'=>true,
                                 'message'=>'All Company List',
                                 'data'=>$companies],200);   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = CompanyService::create($request->all());
        return response()->json(['status'=>true,
                                 'message'=>'New Company Created',
                                 'data'=>$company],200);   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $individualCompany=CompanyService::read($id);
        return response()->json(['status'=>true,
                                 'message'=>'Company Data',
                                 'data'=>$individualCompany],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = CompanyService::update($request->all());
        return response()->json(['status'=>true,
                                 'message'=>'Company Data Updated',
                                 'data'=>$company],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CompanyService::delete($id);
        return response()->json(['status'=>true,
                                 'message'=>'Company Data Deleted'
                             ],204);
    }
   
  
}


