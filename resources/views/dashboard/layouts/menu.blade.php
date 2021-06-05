<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark sidebar-left sidebar-p-t bg-dark" data-perfect-scrollbar>
            <div class="sidebar-heading">Menue</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text"> Dashboard </span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
               <hr>
                    <a class="sidebar-menu-button" href="{{ url('admin/translate') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Translate  </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('slider.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Certificates  </span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('language.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Languages  </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('city.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> City  </span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('office.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Offices  </span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('appointment.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Appointments  </span>
                    </a>
                </li>


                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('documentary.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Appointments Booking </span>
                    </a>
                </li>
            
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('translated_files.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Translated Files  </span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('team.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Team  </span>
                    </a>
                </li>


                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{ route('order.index') }}">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left  fa fa-info-circle"></i>
                        <span class="sidebar-menu-text"> Orders  </span>
                    </a>
                </li>

            <!-- <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                <a href="" class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="avatar avatar-sm mr-2">
                        <img src="{{ auth()->user() ->user_image}}" alt="avatar" class="avatar-img rounded-circle">
                    </span>
                    <span class="flex d-flex flex-column">
                        <strong>{{ auth()->user()->name }}</strong>
                        <small class="text-muted text-uppercase"> {{ __('admin.admin') }} </small>
                    </span>
                </a>
            </div> -->

        </div>
    </div>
</div>
