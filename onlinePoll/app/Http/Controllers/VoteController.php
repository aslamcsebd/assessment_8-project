<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Redirect;
use DB;
use Auth;
use Carbon\Carbon;

use App\Models\QuestionList;
use App\Models\OptionList;
use App\Models\AnswerList;

class VoteController extends Controller {

    // All settings
    public function settings(){
        $data['categories'] = MemberCategory::all();
        return view('admin.settings', $data);
    }

    // Add Custom Field 
    public function addQuestion(Request $request){

        $validator = Validator::make($request->all(),[
            'question'=>'required',
            'dropdownValue'=>'required'
        ]);

        if($validator->fails()){
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        }
 
        $questionId = QuestionList::create([
           'userId' => Auth::user()->id,
           'question' => $request->question,
        ]);

        $dropdownValue = $request->input('dropdownValue');
        foreach ($dropdownValue as $value){
            OptionList::create([
                'questionId' => $questionId->id,
                'option' => $value,   
            ]);
        }        
        return back()->with('success', 'Question & multiple option added');      
    }

    // Add vote    
    public function addVote(Request $request){

        $validator = Validator::make($request->all(),[
            'questionId'=>'required',
            'optionId'=>'required'
        ]);

        if($validator->fails()){
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        }
 
        AnswerList::create([
           'userId' => Auth::user()->id,
           'questionId' => $request->questionId,
           'optionId' => $request->optionId,
        ]);           
        $tab = "addVote";
        return back()->with('success', 'Online  vote add successfully')->withInput(['tab' => $tab]);
    }

}
