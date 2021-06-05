<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Office;
use App\OfficeAppointments;


class officeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $office = Office::paginate(10);
        return view('dashboard.office.index', compact('office'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.office.create');

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
            'office'             => 'required|string',

        ]);
            if($request->address){
                $data['address'] = $request->address;
            }
            if($request->price){
                $data['price'] = $request->price;
            }
            $data['type'] = $request->type;

        Office::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('office.index');
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
    public function edit(Office $office)
    {
        //

        return view('dashboard.office.edit', compact('office'));

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
        $office= Office::find($id);

        $data = $request->validate([
            'office'             => 'required|string',

        ]);
            if($request->address){
                $data['address'] = $request->address;
            }
            if($request->price){
                $data['price'] = $request->price;
            }
            $data['type'] = $request->type;

        $office->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('office.index');
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
        $office= Office::find($id);
       
       if($office->delete()){
        $appointment= OfficeAppointments::where('office_id',$id)->get();
            foreach($appointment as $a){
        $a->delete();
            }
       }
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('office.index');
    }
}
