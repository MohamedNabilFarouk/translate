@extends('dashboard.layouts.app')


@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Office Appointments</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> Office Appointments</h1>
                </div>
                <!-- <a href="{{ route('office.create') }}" class="btn btn-success ml-3">Create Translation office<i class="material-icons">add</i></a> -->
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card">
                <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                    <table class="table mb-0 thead-border-top-0 table-striped">
                        <thead>
                            <tr>

                            <th style="width: 18px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#companies" id="customCheckAll">
                                    <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                </div>
                            </th>

                            <th style="width: 30px;" > # </th>
                            <th style="width: 120px;" > Office </th>
                            <th style="width: 120px;" >Appointments</th>
                            <th style="width: 30px;" > Action </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="companies">
                        @if($appointment->count() > 0)
                            @foreach($appointment as $a)
                        <tr>
                            <td class="text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_20">
                                    <label class="custom-control-label" for="customCheck1_20"><span class="text-hide">Check</span></label>
                                </div>
                            </td>
                            <td style="width: 30px;">
                                <div class="badge badge-soft-dark"> {{ $a->id }} </div>
                            </td>

                            <td style="width: 120px;">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{$a->offices->office ?? ''}}
                                    </div>
                                </div>
                            </td>


                           

                          
                            

                            <td style="width:120px" class="text-center">
                            <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{$a->appointment}}
                                    </div>
                                </div>
                            </td>
                        

                            <td>
                            
                            <a href="{{ route('create.appointment', $a->offices->id) }}" class="btn btn-sm btn-link">
                                    <i class="fa fa-plus fa-2x"></i>
                                </a>
                                <a href="{{ route('appointment.edit', $a->id) }}" class="btn btn-sm btn-link">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <form action="{{ route('appointment.destroy', $a->id) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <h1> {{ trans('admin.no_records') }} </h1>
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
