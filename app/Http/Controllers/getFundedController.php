<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class getFundedController extends Controller
{
    public function showForm()
    {
    	return view('getFunded.forms');
    }
}
