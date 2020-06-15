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
        $pagesize = 20;
        session(['page' => 'energy_lead']);
        $leads = EnergyLead::where('type', true)->orderBy('created_at', 'desc')->paginate($pagesize);
        return view('energy_lead', compact('leads'));
    }

    public function get_energy_contact()
    {
        $pagesize = 20;
        session(['page' => 'energy_contact']);
        $contacts = EnergyLead::where('type', false)->orderBy('created_at', 'desc')->paginate($pagesize);
        return view('energy_contact', compact('contacts'));
    }

    public function energy_lead_delete(Request $request, $id)
    {
        $lead = EnergyLead::where('id', $id)->where('type', true)->first();
        if(!$lead){
            $request->session()->flash('error', 'The data does\'t exist in the database.');
            return back();
        }else{
            $lead->delete();
            $request->session()->flash('success', 'The data has deleted successfully.');
            return back();
        }
    }

    public function energy_lead_detail($id)
    {
        $lead = EnergyLead::where('id', $id)->where('type', true)->first();
        if(!$lead){
            return back();
        }else{
            return view('energy_lead_detail', compact('lead'));
        }
    }

    public function energy_contact_delete($id)
    {
        $contact = EnergyLead::where('id', $id)->where('type', false)->first();
        if(!$contact){
            return back();
        }else{
            $contact->delete();
            return back();
        }
    }

    public function energy_contact_detail($id)
    {
        $contact = EnergyLead::where('id', $id)->where('type', false)->first();
        if(!$contact){
            return back();
        }else{
            return view('energy_contact_detail', compact('contact'));
        }
    }
}
