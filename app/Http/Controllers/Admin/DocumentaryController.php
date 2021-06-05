<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Documentary;
use App\OfficeAppointments;

class DocumentaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doc = Documentary::paginate(10);
        return view('dashboard.documentary.index', compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.documentary.create');

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
            'name'             => 'required|string',
           'email'              =>'required|email',
           'phone'              =>'required',
           'office'             =>'required',
            'appointment'       =>'required',
        ]);

        // $data['image'] = $request->image;

        Documentary::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('documentary.index');
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
    public function edit(Documentary $doc)
    {
        //
        return view('dashboard.documentary.edit', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentary $doc)
    {
        $data = $request->validate([
            'name'             => 'required|string',
           'email'              =>'required|email',
           'phone'              =>'required',
           'office'             =>'required',
            'appointment'       =>'required',
        ]);

        $doc->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('documentary.index');
    
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
        $doc = Documentary::find($id);
        $doc->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('documentary.index');
    }


}
