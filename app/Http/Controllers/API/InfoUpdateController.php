<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\EnergyLead;
use App\Question;

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
            $lead->home_type = 'Apartment';
        }else if ($request->get('house') == true) {
            $lead->home_type = 'Maison';
        }else{
            $lead->home_type = '';
        }
        if ($request->get('landlord') == true) {
            $lead->manager_type = 'Propriétaire';
        }else if ($request->get('tenant') == true) {
            $lead->manager_type = 'Locataire';
        }else{
            $lead->manager_type = '';
        }
        $lead->energy_type = $request->get('heating_value');
        $lead->resident_number = $request->get('number_value');
        $lead->isolate = $request->get('roof_value');
        $lead->more_info = $request->get('more_value');
        $lead->area = $request->get('area');
        $lead->energy_bill = $request->get('bill_value');
        if ($request->get('accom_value') == null) {
            $lead->want_work = '';
        }else{
            $lead->want_work = implode(',', $request->get('accom_value'));

        }
        $lead->save();

        return response(['data' => 'ok'], 200);
    }

    public function energy_contact(Request $request)
    {
        $lead = new EnergyLead();
        $lead->name  = $request->get('name');
        $lead->email = $request->get('email');
        $lead->phone = $request->get('phone');
        $lead->comment = $request->get('comment');
        $lead->type = false;
        $lead->save();
        
        return response(['data' => 'ok'], 200);
    }

    public function energy_question_home()
    {
        $questions = Question::where('type', 'energy_home')->orderBy('created_at', 'desc')->get();
        return response()->json($questions);
    }

    public function energy_question_about()
    {
        $questions = Question::where('type', 'energy_about')->orderBy('created_at', 'desc')->get();
        return response()->json($questions);
    }
}
