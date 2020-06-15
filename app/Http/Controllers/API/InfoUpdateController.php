<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoUpdateController extends Controller
{
    
    public function energy_lead(Request $request)
    {
        return response()->json($request->get('leads'));
    }

    public function energy_contact(Request $request)
    {
        dd('hello');
        return response()->json($request->get('contact'));
    }
}
