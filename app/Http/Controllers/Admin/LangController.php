<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Language;
use Illuminate\Http\Request;



class LangController extends Controller
{


    public function index()
    {
        $lang = Language::paginate(10);
        return view('dashboard.language.index', compact('lang'));
    }

    public function create()
    {
        return view('dashboard.language.create');
    }

    public function store(Request $request, Language $language)
    {
        $data = $request->validate([
            'from_to'             => 'required|string',
           'price'              =>'required|numeric',
           'extra_copy_price'              =>'required|numeric'

        ]);

        // $data['image'] = $request->image;

        Language::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('language.index');
    }

    public function edit(Language $language)
    {
        return view('dashboard.language.edit', compact('language'));
    }

    public function update(Request $request, Language $language)
    {
        $data = $request->validate([
            'from_to'             => 'required|string',
            'price'              =>'required|numeric',
            'extra_copy_price'              =>'required|numeric'

            
        ]);

        $language->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('language.index');
    }

    public function destroy(Language $language)
    {
        // if($slider->image){
        //     Storage::disk('local')->delete('public/sliders/'. $slider->image);
        // }
        $language->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('language.index');
    }
}
