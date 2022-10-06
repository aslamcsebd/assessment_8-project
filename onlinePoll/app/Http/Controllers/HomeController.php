<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

use Validator;
use Redirect;
use DB;
use Auth;
use Carbon\Carbon;

use App\Models\QuestionList;
use App\Models\OptionList;
use App\Models\AnswerList;

class HomeController extends Controller {
    
    public function __construct(){
        $this->middleware('auth');
    }
// with('getOption')
    public function index(){
        // $user = Auth::user()->id;
        // $data['questionList'] = QuestionList::where('userId', Auth::user()->id)->with('getOption')->get();
      
        // $questionList = QuestionList::with('getOption')->pluck('id');
        // $answerList = AnswerList::where('userId', $user)->pluck('questionId');
 
        // $unVoteQuestion = $questionList->diff($answerList);

        // $data['addVote'] = QuestionList::with('getOption')->whereIn('id', $unVoteQuestion)->get();  
        $data['answered'] = QuestionList::with('getOption.getAnswers')
        ->whereHas('getOption.getAnswers', function($q){
            $q->where('userId', Auth::user()->id);
        })->get();

        $data['notAnswered'] = QuestionList::with('getOption.getAnswers')
        ->whereDoesntHave('getOption.getAnswers', function($q){
            $q->where('userId', Auth::user()->id);
        })->get();

        return view('home', $data);
    }

    // Delete
    public function itemDelete($model, $id, $tab){
        $itemId = DB::table($model)->find($id);
        if (Schema::hasColumn($model, 'image')){
            ($itemId->image!=null) ? (file_exists($itemId->image) ? unlink($itemId->image) : '') : '';
        }
        DB::table($model)->where('id', $id)->delete();
        return back()->with('success', $model.' delete successfully')->withInput(['tab' => $tab]);
    }

    
}
