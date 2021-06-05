@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointment For {{$office->office}}</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> Appointment For {{$office->office}} </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('appointment.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('dashboard.partials._errors')

       <input type='hidden' name='office_id' value='{{$office->id}}'>
                    <div class="form-group">
                    <label for="ar_title"> appointment</label>
                        <input class="form-control" type="text" name="appointment" value="{{ old('appointment') }}" required>
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
