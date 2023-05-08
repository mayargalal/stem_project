<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Donar;
use Illuminate\Http\Request;
use Validator;

class CollectionController extends Controller
{
    public function index($id){
        $donar=Donar::find($id);
        $collection=Collection::where('donar_id',$id)->first();


        if (!$collection) {

           if($donar) {
               return view('collection', compact('id'));
           }
           else{
               return redirect()->back();
           }
        }else{
            return redirect()->back();
        }
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [

            'donar_id' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }





        $collection=Collection::create($request->all());
        return redirect()->route('pending');

    }
}
