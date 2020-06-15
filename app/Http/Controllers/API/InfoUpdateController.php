<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\EnergyLead;

class InfoUpdateController extends Controller
{
    
    public function energy_lead(Request $request)
    {
        $lead = new EnergyLead();
        $lead->name  = $request->get('name');
        $lead->email = $request->get('email');
        $lead->phone = $request->get('phone');
        $lead->comment = $request->get('comment');
        $lead->zip_code = $request->get('zip');
        if ($request->get('apartment') == true) {
            $lead->home_type = 'apartment';
        }else if ($request->get('house') == true) {
            $lead->home_type = 'home';
        }else{
            $lead->home_type = '';
        }
        if ($request->get('landlord') == true) {
            $lead->manager_type = 'landlord';
        }else if ($request->get('tenant') == true) {
            $lead->manager_type = 'tenant';
        }else{
            $lead->manager_type = '';
        }
        $lead->energy_type = $request->get('heating_value');
        $lead->resident_number = $request->get('number_value');
        $lead->isolate = $request->get('roof_value');
        $lead->more_info = $request->get('more_value');
        $lead->area = $request->get('area');
        $lead->energy_bill = $request->get('bill_value');
        $lead->want_work = implode(',', $request->get('accom_value'));
        $lead->save();

        return response('ok', 200);
    }

    public function energy_contact(Request $request)
    {
        return response()->json($request->all());
    }
}
