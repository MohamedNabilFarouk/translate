<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use App\Traits\imagesTrait;


class SliderController extends Controller
{
    use imagesTrait ;

    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('dashboard.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('dashboard.slider.create');
    }

    public function store(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'image'             => 'required',
           
        ]);
if($request->has('image')){
        $image = $this->saveImages($request->image , 'images');
        $data['image']= $image;
}
        // $data['image'] = $request->image;

        Slider::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('slider.index');
    }

    public function edit( $id)
    {
        $slider=Slider::find($id);

        return view('dashboard.slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'image'             => 'required',
            
        ]);
if($request->has('image')){

        $image = $this->saveImages($request->image , 'images');
        $data['image']= $image;
}
        $slider->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        // if($slider->image){
        //     Storage::disk('local')->delete('public/sliders/'. $slider->image);
        // }
        $slider=Slider::find($id);
        $slider->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('slider.index');
    }
}
