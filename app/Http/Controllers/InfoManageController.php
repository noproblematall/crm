<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\EnergyLead;

class InfoManageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_energy_lead()
    {
        $pagesize = 2;
        session(['page' => 'energy_lead']);
        $leads = EnergyLead::orderBy('created_at', 'desc')->paginate($pagesize);
        return view('energy_lead', compact('leads'));
    }

    public function get_energy_contact()
    {
        session(['page' => 'energy_contact']);
        return view('energy_contact');
    }

    public function energy_lead_delete($id)
    {
        $lead = EnergyLead::find($id);
        if(!$lead){
            return back();
        }else{
            $lead->delete();
        }
    }

    public function energy_lead_detail($id)
    {
        $lead = EnergyLead::find($id);
        if(!$lead){
            return back();
        }else{
            return view('energy_lead_detail', compact('lead'));
        }
    }
}
