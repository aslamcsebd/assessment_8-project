<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function signUp(){
        return view('singUp.pet-name');
    }

    public function addName(Request $request){
        $data['name'] = 'Sasha';
        return view('singUp.plan', $data);
    }

    public function planView(Request $request){
        $data['name'] = 'Sasha';
        return view('singUp.viewPlan', $data);
    }

    public function readyPay(Request $request){
        $data['name'] = 'Sasha';
        return view('singUp.planWith', $data);
    }

    // Pet registration
    public function petForm($name){
        $data['name'] = $name;
        return view('petForm.index', $data);
    }

    public function details(){
        return view('petForm.details');
    }

    public function addDetails(Request $request){       
        $data['name'] = 'Sasha';
        return view('petForm.plan', $data);
    }

    public function addPlan(){       
        $data['name'] = 'Sasha';
        return view('petForm.dental', $data);
    }

    public function planList(){       
        $data['name'] = 'Sasha';
        return view('petForm.planSummary', $data);
    }

    public function checkoutDetails(){       
        $data['name'] = 'Sasha';
        return view('petForm.checkoutDetails', $data);
    }
}

