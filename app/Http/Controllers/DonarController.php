<?php

namespace App\Http\Controllers;

use App\Models\Donar;
use Illuminate\Http\Request;
use Validator;

class DonarController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'mother_name_ar' => 'required|',
            'national_id' => 'required|numeric',
            'blood_group' => 'required',




        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }


        $donar=Donar::create($request->all());
        return redirect()->route('contact',$donar->id);
    }
}
