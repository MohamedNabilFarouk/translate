<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\City;
use Illuminate\Http\Request;



class CityController extends Controller
{


    public function index()
    {
        $city = City::paginate(10);
        return view('dashboard.city.index', compact('city'));
    }

    public function create()
    {
        return view('dashboard.language.create');
    }

    public function store(Request $request, City $city)
    {
        $data = $request->validate([
            'name'             => 'required|string',
           'price'              =>'required'
        ]);

        // $data['image'] = $request->image;

        City::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('city.index');
    }

    public function edit(City $city)
    {
        return view('dashboard.city.edit', compact('language'));
    }

    public function update(Request $request, City $city)
    {
        $data = $request->validate([
            'name'             => 'required|string',
            'price'              =>'required'
            
        ]);

        $city->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('city.index');
    }

    public function destroy(Language $language)
    {
        // if($slider->image){
        //     Storage::disk('local')->delete('public/sliders/'. $slider->image);
        // }
        $city->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('city.index');
    }
}
