@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> Dashboard </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Translate</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> Translate </h1>
                </div>
               
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

                            <th style="width: 30px;" > Name </th>
                            <th style="width: 120px;" > Beneficiary Name </th>
                            <th style="width: 120px;" > Contact Info </th>
                            <!-- <th style="width: 120px;" >Phone</th> -->
                            <th style="width: 30px;" > Country </th>
                            <th style="width: 30px;" > Translation </th>
                            <th style="width: 30px;" > Type </th>
                            <th style="width: 120px;" >Total Price</th>
                            <th style="width: 30px;" > Note </th>
                            <th style="width: 30px;" > Status </th>
                            <th style="width: 60px;" > Action </th>




                        </tr>
                        </thead>
                        <tbody class="list" id="companies">
                        @if($translate->count() > 0)
                            @foreach($translate as $index => $t)
                            @php
                              if($t->type == 1){
                              $type = 'Translation';
                              }else{
                                $type = 'Documentary';
                              }

                              if($t->delivery == 1){
                                  $deliver = 'Yse';
                              }else{
                                $deliver = 'No';
                              }
                            @endphp
                        <tr>
                            <td class="text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_20">
                                    <label class="custom-control-label" for="customCheck1_20"><span class="text-hide">Check</span></label>
                                </div>
                            </td>
                            <td style="width: 30px;">
                                 {{ $t->name }}
                            </td>

                            <td style="width: 40px;">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{ $t->beneficiary_name }}
                                    </div>
                                </div>
                            </td>
                
                            <td style="width: 40px;">
                              
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                    {{ $t->email }} 
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                    {{ $t->phone }} 
                                    </div>
                                </div>
                            </td>

                            <td style="width: 120px;">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                    {{ $t->cities->name ?? '' }}
                                    </div>
                                </div>
                            </td>

                            <td style="width:120px" class="text-center">
                            {{ $t->lang->from_to ?? '' }}
                            </td>
                            <td style="width:120px" class="text-center">
                            {{ $type }}
                            </td>

                            <td style="width: 120px;">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                    {{ $t->total }}
                                    </div>
                                </div>
                            </td>

                            <td style="width:120px" class="text-center">
                            {{ $t->note }}
                            </td>

                            <td style="width:120px" class="text-center">
                            <div class="badge badge-soft-dark">{{ $t->status }}</div>
                            <a href="{{route('edit.translate',  $t->id)}}" class="btn btn-sm btn-link">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>

                            </td>

                            <td style='width:100px;'>
                              
                            <a href='{{asset("files to translate/". $t->file)}}'><i class="fa fa-download" aria-hidden="true"></i></a>

                                <form action="{{route('translate.destroy', $t->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> </button>

                                </form>
                             @if( $t->translated == 0)   
                            <a href='{{route("translate_files.create", $t->id)}}'><i class="fa fa-upload" aria-hidden="true"></i>translate</a>
                            @else
                            Translated

                            @endif
                            </td>
                        </tr>
                        @endforeach
                            {{ $translate->appends(request()->query())->links() }}
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
