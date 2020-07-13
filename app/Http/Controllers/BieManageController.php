<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BienvestirLead;

class BieManageController extends Controller
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


    public function get_lead()
    {
        $pagesize = 20;
        session(['page' => 'bie_lead']);
        $leads = BienvestirLead::where('type', true)->orderBy('created_at', 'desc')->paginate($pagesize);
        return view('bie_lead', compact('leads'));
    }


    public function get_contact()
    {
        $pagesize = 20;
        session(['page' => 'bie_contact']);
        $contacts = BienvestirLead::where('type', false)->orderBy('created_at', 'desc')->paginate($pagesize);
        return view('bie_contact', compact('contacts'));
    }

    public function get_leads_all()
    {
        $info = BienvestirLead::select('name', 'email', 'phone', 'age', 'financial', 'prospect', 'friend', 'vacation', 'risk', 'game', 'investment', 'prefer', 'diversification', 'created_at')->orderBy('created_at','desc')->get();
        return response()->json($info);
    }

    public function lead_delete(Request $request, $id)
    {
        $lead = BienvestirLead::where('id', $id)->where('type', true)->first();
        if(!$lead){
            $request->session()->flash('error', 'The data does\'t exist in the database.');
            return back();
        }else{
            $lead->delete();
            $request->session()->flash('success', 'The data has deleted successfully.');
            return back();
        }
    }

    public function lead_detail($id)
    {
        $lead = BienvestirLead::where('id', $id)->where('type', true)->first();
        if(!$lead){
            return back();
        }else{
            return view('bie_lead_detail', compact('lead'));
        }
    }

    public function contact_delete(Request $request, $id)
    {
        $contact = BienvestirLead::where('id', $id)->where('type', false)->first();
        if(!$contact){
            $request->session()->flash('error', 'The data does\'t exist in the database.');
            return back();
        }else{
            $contact->delete();
            $request->session()->flash('success', 'The data has deleted successfully.');
            return back();
        }
    }

    public function contact_detail($id)
    {
        $contact = BienvestirLead::where('id', $id)->where('type', false)->first();
        if(!$contact){
            return back();
        }else{
            return view('bie_contact_detail', compact('contact'));
        }
    }
}
