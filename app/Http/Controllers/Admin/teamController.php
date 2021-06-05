<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\team;
use App\Traits\imagesTrait;
use Illuminate\Support\Str;


class teamController extends Controller
{
    use imagesTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = team::paginate(10);
        return view('dashboard.team.index', compact('teams'));
    }

    public function create()
    {
        return view('dashboard.team.create');
    }

    public function store(Request $request, team $team)
    {
        $data = $request->validate([
            'name'             => 'required|string',
            'role'              =>'required',
            'bio'               =>'required|max:191',
           
        ]);
if($request->has('image')){
        $image = $this->saveImages($request->image , 'images');
        $data['image']= $image;
}

$code = Str::random(8);
$data['code'] = $code ;
        // $data['image'] = $request->image;

        team::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('team.index');
    }

    public function edit($id)
    {
        $team= team::find($id);
        return view('dashboard.team.edit', compact('team'));
    }

    public function update(Request $request, team $team)
    {
        $data = $request->validate([
            'name'             => 'required|string',
            'role'              =>'required',
            'bio'               =>'required|max:191',
            
        ]);
if($request->has('image')){

        $image = $this->saveImages($request->image , 'images');
        $data['image']= $image;
}
        $team->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('team.index');
    }

    public function destroy( $id)
    {
        // if($slider->image){
        //     Storage::disk('local')->delete('public/sliders/'. $slider->image);
        // }
        $team= team::find($id);
        $team->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('team.index');
    }
}
