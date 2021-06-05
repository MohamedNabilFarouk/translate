<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentary;
use App\OfficeAppointments;

class DocumentaryController extends Controller
{
    //
    public function office_appointment($id){
        $appointment = OfficeAppointments::where('office_id',$id)->get();
        return response()->json(['data'=>$appointment]);
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'             => 'required|string',
           'email'              =>'required|email',
           'phone'              =>'required',
           'office'             =>'required',
            'appointment'       =>'required',
        ]);

        // $data['image'] = $request->image;

        Documentary::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->back();
    }

}
