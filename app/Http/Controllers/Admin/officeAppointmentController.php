<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OfficeAppointments;
use App\Office;

class officeAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appointment = OfficeAppointments::orderBy('office_id')->paginate(10);
        return view('dashboard.appointment.index', compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $office = Office::find($id);
        
        return view('dashboard.appointment.create')->withOffice($office);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'appointment'             => 'required|string',

        ]);
           
                $data['office_id'] = $request->office_id;

            

        OfficeAppointments::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeAppointments $appointment)
    {
        //
            $office= Office::all();
        return view('dashboard.appointment.edit', compact('appointment','office'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $appointment= OfficeAppointments::find($id);

        $data = $request->validate([
            'appointment'             => 'required|string',

        ]);
            if($request->address){
                $data['office_id'] = $request->office_id;
            }

        $appointment->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('appointment.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $appointment= OfficeAppointments::find($id);
        $appointment->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('appointment.index');
    }
}
