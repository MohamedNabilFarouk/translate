<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\translate;

class TranslateController extends Controller
{
    //
    public function index(){
        $translate = translate::paginate(5);
        return view('dashboard.translate.index',compact('translate'));
    }

    public function edit($id){
        $translate = translate::find($id);
        return view('dashboard.translate.edit',compact('translate'));
    }
    public function update(Request $request , $id){
        
        $translate = translate::find($id);
        $translate->status = $request->status;
    
        $translate->save();
        return redirect()->route('translate.index');
     
    }

    public function destroy($id){
$translate=translate::find($id);
        $translate->delete();
        return redirect()->back();
    }

    public function dashboard(){
            $file_count =translate::all();
            return view('home',compact('file_count'));
    }
}