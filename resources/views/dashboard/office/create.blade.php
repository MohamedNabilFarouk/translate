@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page">office</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> office </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('office.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('dashboard.partials._errors')

                    <div class="form-group">
                        <label for="ar_title"> Office *</label>
                        <input  name="office" type='text' class="form-control"  value="{{ old('office') }}" required>
                    </div>
                    <div class="form-group">
                        <label> Type *</label>
                        <select class="form-select form-control"  name='type' >
                        
                         <option value='0'> Documentary</option>
                         <option value='1'> Translation</option>

                 
                        </select>
                    </div>

                    <div class="form-group">
                        <label > price for translation</label>
                        <input  name="price" type='text' class="form-control"  value="{{ old('price') }}" >
                    </div>
                    

                    <div class="form-group">
                    <label for="ar_title"> Address<small>optional</small></label>
                        <input class="form-control" type="text" name="address" value="{{ old('Address') }}">
                    </div>
                   
                    


                    <div class="text-right mb-5">
                        <input type="submit" name="add" class="btn btn-success" value="add">
                    </div>
                </form>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
