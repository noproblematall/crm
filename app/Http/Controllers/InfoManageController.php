<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\EnergyLead;
use App\Question;

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

    public function get_energy_leads_all()
    {
        $info = EnergyLead::select('name', 'email', 'phone', 'zip_code', 'comment', 'home_type', 'manager_type', 'energy_type', 'resident_number', 'isolate', 'want_work', 'energy_bill', 'more_info', 'area', 'created_at')->orderBy('created_at','desc')->get();
        return response()->json($info);
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

    public function energy_contact_delete(Request $request, $id)
    {
        $contact = EnergyLead::where('id', $id)->where('type', false)->first();
        if(!$contact){
            $request->session()->flash('error', 'The data does\'t exist in the database.');
            return back();
        }else{
            $contact->delete();
            $request->session()->flash('success', 'The data has deleted successfully.');
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

    public function energy_question()
    {
        $pagesize = 20;
        session(['page' => 'energy_question']);
        $questions = Question::where('type', 'energy_home')->orWhere('type', 'energy_about')->orderBy('created_at', 'desc')->paginate($pagesize);
        return view('energy_question', compact('questions'));
    }

    public function energy_new_question()
    {
        return view('energy_new_question');
    }

    public function energy_question_add(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $type = $request->get('type');
        $question = new Question();
        $question->title = $title;
        $question->content = $content;
        $question->type = $type;
        $question->save();
        $request->session()->flash('success', 'The question has saveed successfully.');
        return redirect()->route('energy_question');
    }

    public function energy_question_edit(Request $request, $id)
    {
        $question = Question::find($id);
        if(!$question){
            return back();
        }else{
            return view('energy_question_detail', compact('question'));
        }
    
    }

    public function energy_question_update(Request $request)
    {
        $id = $request->get('id');
        $question = Question::find($id);
        if(!$question){
            return back();
        }else{
            $question->title = $request->get('title');
            $question->content = $request->get('content');
            $question->type = $request->get('type');
            $question->save();
            $request->session()->flash('success', 'The question has updateed successfully.');
            return redirect()->route('energy_question');
        }
    
    }
    public function energy_question_delete(Request $request, $id)
    {
        $question = Question::find($id);
        if(!$question){
            $request->session()->flash('error', 'The question does\'t exist in the database.');
            return back();
        }else{
            $question->delete();
            $request->session()->flash('success', 'The question has deleted successfully.');
            return back();
        }
    }
}
