@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Language</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> Language</h1>
                </div>
                <a href="{{ route('language.create') }}" class="btn btn-success ml-3">Create Translation Language<i class="material-icons">add</i></a>
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
                            <th style="width: 120px;" > From - To </th>
                         
                            <th style="width: 120px;" >price</th>
                            <th style="width: 120px;" >extra copy price</th>
                            <th style="width: 30px;" > Action </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="companies">
                        @if($lang->count() > 0)
                            @foreach($lang as $l)
                        <tr>
                            <td class="text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_20">
                                    <label class="custom-control-label" for="customCheck1_20"><span class="text-hide">Check</span></label>
                                </div>
                            </td>
                            <td style="width: 30px;">
                                <div class="badge badge-soft-dark"> {{ $l->id }} </div>
                            </td>

                            <td style="width: 120px;">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{$l->from_to}}
                                    </div>
                                </div>
                            </td>
                           

                          
                            

                            <td style="width:120px" class="text-center">
                            <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{$l->price}}
                                    </div>
                                </div>
                            </td>
                            <td style="width:120px" class="text-center">
                            <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{$l->extra_copy_price}}
                                    </div>
                                </div>
                            </td>

                            <td>
                                <a href="{{ route('language.edit', $l->id) }}" class="btn btn-sm btn-link">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <form action="{{ route('language.destroy', $l->id) }}" method="post" style="display: inline-block">
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
