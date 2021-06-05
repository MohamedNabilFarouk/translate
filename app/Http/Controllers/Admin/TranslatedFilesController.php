<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TranslatedFiles;
use App\translate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Traits\imagesTrait;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\team;
use App\TranslatedImages;




class TranslatedFilesController extends Controller
{
    use imagesTrait ;


    public function index()
    {
        $translated_files = TranslatedFiles::paginate(10);
        return view('dashboard.translated_files.index', compact('translated_files'));
    }

    public function create($id)
    {
        $translate= translate::find($id);
        $team = team::all();
        return view('dashboard.translated_files.create',compact('translate','team'));
    }

    public function createOnPaper(){
        $team = team::all();
        return view('dashboard.translated_files.createOnPaper',compact('team'));
    }

    public function store(Request $request, TranslatedFiles $translated_files)
    {
        $data = $request->validate([
            'title'             => 'required|string',
           'des'              =>'required',
            // 'code'             => 'required|unique',
        //    'image'              =>'required',
           'file'               =>'required',
           'team_id'            =>'required',
        ]);
// dd($request->beneficiary_id);
        $code = Str::random(10);
        $data['code'] = $code ;

        if(isset($request->beneficiary_id)){
        $beneficiary = translate::where('id', $request->beneficiary_id)->first() ;
        $data['beneficiary_id'] = $request->beneficiary_id;
        $data['beneficiary_name'] = $beneficiary->beneficiary_name;
        $data['mode']              = '0' ;

        }else{
            $data['beneficiary_name'] = $request->beneficiary_name;
            $data['mode']              = '1'; 
            $data['phone']              =  $request->phone;

        }

        
        // if($request->has('image')){
           
        // } 
        if($request->has('file')){

        $file = $this->saveImages($request->file , 'TranslatedFiles');
         $data['file'] = $file;
        }
        // dd($data);
        $translated_file = TranslatedFiles::create($data);

         if($request->has('image')){
            foreach($request->image as $i){
                $image = $this->saveImages($i , 'images');
                $img = Image::make((public_path('images/'.$image)));
                $img->insert(public_path('logos/logo.png'), 'bottom-left', 5, 5);
    
                $img->save(public_path('images/'.$image));
                $images_data['image'] = $image;
                $images_data['file_id'] = $translated_file->id;

                TranslatedImages::create($images_data);
            }
         }



         if(isset($request->beneficiary_id)){
         $beneficiary->translated = 1;
         $beneficiary->save();
         }
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('translated_files.index');
    }

    public function edit($id)
    {
        // dd($id);
        $translated_files = TranslatedFiles::find($id);
        $team = team::all();
        return view('dashboard.translated_files.edit', compact('translated_files','team'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'             => 'required|string',
            'des'              =>'required',
            'team_id'            =>'required',
            // 'code'             => 'required|string',
            // 'image'              =>'required',
            // 'file'               =>'required',
            
        ]);

        $translated_files = TranslatedFiles::find($id);


        if($translated_files->mode == 1){
            $data['beneficiary_name'] = $request->beneficiary_name;
            $data['phone']              =  $request->phone;
            }


            if($request->has('image')){
              
                    $all_images = TranslatedImages::where('file_id',$translated_files->id)->get();
                    foreach($all_images as $m){
                    //     $image_path = public_path('/images/'.$m->image);
                    //     if(File::exists($image_path)) {
                    //          dd($image_path);
                    //        File::delete($image_path);
                    //    }
                        $m->delete();
                       
                    }

                foreach($request->image as $i){
                    $image = $this->saveImages($i , 'images');
                    $img = Image::make((public_path('images/'.$image)));
                    $img->insert(public_path('logos/logo.png'), 'bottom-left', 5, 5);
        
                    $img->save(public_path('images/'.$image));
                    $images_data['image'] = $image;
                    $images_data['file_id'] = $translated_files->id;
    
                    TranslatedImages::create($images_data);
                }
             }
        if($request->has('file')){

        $file = $this->saveImages($request->file , 'TranslatedFiles');
         $data['file'] = $file;
        }

        $translated_files->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('translated_files.index');
    }

    public function destroy($id)
    {
        // if($slider->image){
        //     Storage::disk('local')->delete('public/sliders/'. $slider->image);
        // }
        $translated_files = TranslatedFiles::find($id);
        
        $translate = translate::where('id',$translated_files->beneficiary_id)->first();
        $translated_files->delete();
        if(isset($translate)){
        $translate->translated = 0;
        $translate->save();
        }
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('translated_files.index');
    }
}
