
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
                    <h1 class="m-0"> office </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('appointment.update', $appointment->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('dashboard.partials._errors')

                    <div class="form-group">
                        <label for="role"> Office</label>
                        <select class="form-control"  name='office'>
                        @foreach($office as $o)
                      <option value='{{$o->id}}' @if(($o->id)== ($appointment->office_id))  selected @endif >{{$o->office}}</option>
                      @endforeach

                    
                  </select>
                    </div>
                   

                    <div class="form-group">
                    <label for="ar_title"> Address</label>

                        <input class="form-control" type="text" name="appointment" value="{{$appointment->appointment}}">
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
