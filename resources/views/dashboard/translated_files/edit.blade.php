
@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> {{ trans('admin.home') }} </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> translated_files </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('translated_files.update', $translated_files->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('dashboard.partials._errors')

                    <div class="form-group">
                        <label for="title"> Title</label>
                        <input  name="title" type='text' class="form-control" value="{{$translated_files->title}}" >
                    </div>
                   

                    <div class="form-group">
                    <label for="des"> Description</label>

                    <textarea  name="des" class="form-control">{{$translated_files->des}}</textarea>

                    </div>
<!-- onpaper fields -->
                    @if($translated_files->mode == 1)
                    <div class="form-group">
                        <label for="title"> Beneficiary Name</label>
                        <input  name="beneficiary_name" type='text' class="form-control" value="{{$translated_files->beneficiary_name}}" >
                    </div>


                    <div class="form-group">
                        <label for="title"> Beneficiary Phone</label>
                        <input  name="phone" type='text' class="form-control" value="{{$translated_files->phone}}" >
                    </div>




                    @endif

<!-- end onpapaer fields -->


                    <div class="form-group">
                        <label for="team_id"> Trasnlator</label>
                        <select class="form-control"  name='team_id' required>
                            @foreach($team as $t)
                      <option value='{{$t->id}}' @if(($translated_files->team_id)== ($t->id)) selected @endif >{{$t->name}}-({{$t->code}})</option>
                      @endforeach

                    
                  </select>
                    </div>

                    <div class="form-group">
                        <label> Image </label>
                        <div class="dropzone" id="mainphoto"></div>
                    </div>

                    <div class="form-group">
                        <input class="image_name" type="file" name="image[]" value="{{ $translated_files->image }}" multiple>
                        <img src="{{asset('images/'.$translated_files->image) }}" style="width: 120px; height: 50px">
                    </div>

                  
<hr>

<div class="form-group">
                        <label> Translated File </label>
                        <div class="dropzone" id="mainphoto"></div>
                    </div>

                    <div class="form-group">
                        <input class="image_name" type="file" name="file" value="{{ $translated_files->file }}">
                        <a href='{{asset("TranslatedFiles/". $translated_files->file)}}'><i class="fa fa-download" aria-hidden="true"></i>download old file</a>   

                    </div>
                

                    <div class="text-right mb-5">
                        <input type="submit" name="add" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
