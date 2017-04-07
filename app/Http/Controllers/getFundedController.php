<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use URL;
use Auth;
use App\funded_clients;
class getFundedController extends Controller
{
    public function index()
    {
    	$clients= funded_clients::orderBy('full_name', 'asc')->get();
    	return view('getfunded.clientlist', compact('clients'));

    }
    public function create()
    {
    	return view('getFunded.forms');
    }
    public function store(Request $request)
    {
    	 $this->validate($request, [
            'full_name' => 'required|min:5',
            'email' => 'required|email',
            'mobile_number' => 'required|min:6',
         	'country' => 'required',
            'currency' => 'required',
            'company' => 'required',
            'industry' => 'required',
            'year_established' => 'required|max:4',
            'funding_amount_req' => 'required',
            'assets_to_be_purchased' => 'required',
            'est_annual_revenue' => 'required',
            'funding_period'=>'required',
            'financial_report'=>'required|file'
            ]);
    	 $files = $request->file('financial_report');
    	 $namefiles =$files -> getClientOriginalName();
    	 $user = Auth::user();
    	 $user-> clients()->create([
    	 	'full_name' => $request->full_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
         	'country' => $request->country,
            'currency' => $request->currency,
            'company' => $request->company,
            'industry' => $request->industry,
            'year_established' => $request->year_established,
            'funding_amount_req' => $request->funding_amount_req,
            'assets_to_be_purchased' => $request->assets_to_be_purchased,
            'est_annual_revenue' => $request->est_annual_revenue,
            'funding_period'=>$request->funding_period,
            'purchases_order' => $request->purchases_order,
            'financial_report'=> $namefiles,
    	 	]);
    	$files-> move (public_path('/files'), $namefiles); 
        return back();
    }
    public function show() 
    {

    }
    public function delete()
    {
    }
    public function destroy()
    {

    }
}
