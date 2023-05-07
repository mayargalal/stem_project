<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function index($id){
        $contact=Contact::where('donar_id',$id)->first();
        if (!$contact) {
        return view('contact',compact('id'));
        }else{
            return redirect()->back();
        }
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [

            'phone' => 'nullable|numeric',
            'mobile' => 'nullable|numeric',
            'donar_id' => 'required|numeric',





        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }


        $contact=Contact::create($request->all());
        return redirect()->route('cbu',$request->donar_id);

    }
}
