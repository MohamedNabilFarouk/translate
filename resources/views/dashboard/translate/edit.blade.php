@push('admin_scripts')
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        $(document).ready(function () {
            $('#mainphoto').dropzone({
                url: '{{ route('upload.image') }}',
                paramName:'image',
                autoDiscover: false,
                uploadMultiple: false,
                maxFiles: 1,
                acceptedFiles: 'image/*',
                dictDefaultMessage: '{{ __('admin.upload_photo') }}',
                dictRemoveFile: '<button class="btn btn-danger"> <i class="fa fa-trash center"></i></button>',
                params: {
                    _token: '{{ csrf_token() }}',
                    path: 'aboutus',
                    width: 500,
                    height: 542
                },
                addRemoveLinks: true,
                removedfile:function (file) {
                    var imageName = $('.image_name').val();
                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: '{{ route('remove.image') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            image: imageName,
                            path: 'aboutus'
                        }
                    });
                    var fmock;
                    return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement): void 0;
                },
                init: function () {

                    @if(!empty($about->image))
                    var mock = { name: '{{ $about->en_title }}', size: 2};
                    this.emit('addedfile', mock);
                    this.emit('thumbnail', mock, '{{ $about->about_image }}');
                    this.emit('complete', mock);
                    $('.dz-progress').remove();
                    @endif
                        this.on("success", function (file, image) {
                        $('.image_name').val(image);
                    });
                }
            });
        });
    </script>
    <style type="text/css">

        .dropzone {
            width: 200px;
            height: 90px;
            min-height: 0px !important;
            background-color: #1C2260;
            border: #1C2260;
        }
    </style>
@endpush

@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> home</a></li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> Update Status </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('update.translate', $translate->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('dashboard.partials._errors')
                    
                   

                    <div class="form-group col-sm-6">
                  <label>Status</label>
                  <select class="form-select form-control"  name='status' aria-label="Default select example" >
                        <option value="Translated">Translated</option>
                        <option value="Translating">Translating</option>
                        <option value="Paid">Paid</option>
                        <option value="Waiting">Waiting</option>
                        <option value="Delivered">Delivered</option>
                        
                    </select>
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
