
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
                    <h1 class="m-0"> Language </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('language.update', $language->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('dashboard.partials._errors')

                    <div class="form-group">
                        <label for="ar_title"> From - To</label>
                        <input  name="from_to" type='text' class="form-control" value="{{$language->from_to}}" placeholder="Ex: English - Arabic">
                    </div>
                   

                    <div class="form-group">
                    <label for="ar_title"> price</label>

                        <input class="form-control" type="number" name="price" value="{{$language->price}}">
                    </div>

                    <div class="form-group">
                    <label for="ar_title"> extra copy price</label>

                        <input class="form-control" type="number" name="extra_copy_price" value="{{$language->extra_copy_price}}">
                    </div>
                    <!-- <div class="form-group">
                        <label> {{ __('admin.photo') }} </label>
                        <div class="dropzone" id="mainphoto"></div>
                    </div> -->

                    <div class="text-right mb-5">
                        <input type="submit" name="add" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
