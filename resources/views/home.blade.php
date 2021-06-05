@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page"><i class="material-icons icon-20pt"> {{ trans('admin.home') }} </i></li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> Translate </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">
            <div class="card-group">
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-briefcase"></i></div>
                    <div class="text-amount"> {{ count($file_count) }} </div>
                    <div class="card-header__title mb-2"> All Files To Translate </div>
                </div>
                
                
              
            </div>
           
           

            <div class="row">

            

                <div class="col-lg-4">

                    

                </div>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
