<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Donar;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    public function index(Request $request){
        if ($request->name == null) {
            $pendings = Donar::orderBy('id', 'ASC')->get();

        }else{
            $pendings =  Donar::where('mother_name_ar','like' ,'%' . $request->name . '%')->get();

        }

            return view('pending',compact('pendings'));

    }
    public function report(Request $request){
        if ($request->name == null) {
            $pendings = Donar::orderBy('id', 'ASC')->get();

        }else{
            $pendings =  Donar::where('mother_name_ar','like' ,'%' . $request->name . '%')->get();

        }
        $resents=Donar::orderBy('id','DESC')->limit(5)->get();
        $starts = Donar::where('start',1)->get();
        return view('report',compact('pendings','resents','starts'));

    }
    public function start($id){
        $start = Donar::find($id);
        if($start->start ==0){
            $start->update(['start'=>1]);
            return redirect()->route('report');
        }
        if($start->start ==1){
            $start->update(['start'=>0]);
            return redirect()->route('report');
        }

    }

    public function show($id){
        $report = Donar::with(['cpus','contacts'])->find($id);

        return view('final_report',compact('report'));
    }

}
