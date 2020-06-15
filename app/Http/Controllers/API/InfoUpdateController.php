<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoUpdateController extends Controller
{
    
    public function energy_lead(Request $request)
    {
        return response()->json($request->all());
    }

    public function energy_contact(Request $request)
    {
        return response()->json($request->all());
    }
}
