<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">

        <a href="{{route('home')}}" class="logo">
            <span class="text-white">Grupo Lizame</span>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar ">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
            {{--            <div class="collapse" id="search-nav">--}}
            {{--                <form class="navbar-left navbar-form nav-search mr-md-3">--}}
            {{--                    <div class="input-group">--}}
            {{--                        <div class="input-group-prepend">--}}
            {{--                            <button type="submit" class="btn btn-search pr-1">--}}
            {{--                                <i class="fa fa-search search-icon"></i>--}}
            {{--                            </button>--}}
            {{--                        </div>--}}
            {{--                        <input type="text" placeholder="Search ..." class="form-control">--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </div>--}}
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item toggle-nav-search hidden-caret">
                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    {{--                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                        <i class="fa fa-envelope"></i>--}}
                    {{--                    </a>--}}
                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                        <li>
                            <div class="dropdown-title d-flex justify-content-between align-items-center">
                                Messages
                                <a href="#" class="small">Mark all as read</a>
                            </div>
                        </li>
                        <li>
                            <div class="message-notif-scroll scrollbar-outer">
                                <div class="notif-center">
                                    <a href="#">
                                        <div class="notif-img">
                                            <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Jimmy Denis</span>
                                            <span class="block">
														How are you ?
													</span>
                                            <span class="time">5 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img">
                                            <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Chad</span>
                                            <span class="block">
														Ok, Thanks !
													</span>
                                            <span class="time">12 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img">
                                            <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Jhon Doe</span>
                                            <span class="block">
														Ready for the meeting today...
													</span>
                                            <span class="time">12 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img">
                                            <img src="../assets/img/talha.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Talha</span>
                                            <span class="block">
														Hi, Apa Kabar ?
													</span>
                                            <span class="time">17 minutes ago</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    {{--                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                        <i class="fa fa-bell"></i>--}}
                    {{--                        <span class="notification">4</span>--}}
                    {{--                    </a>--}}
                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                        <li>
                            <div class="dropdown-title">You have 4 new notification</div>
                        </li>
                        <li>
                            <div class="notif-scroll scrollbar-outer">
                                <div class="notif-center">
                                    <a href="#">
                                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                        <div class="notif-content">
													<span class="block">
														New user registered
													</span>
                                            <span class="time">5 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                        <div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
                                            <span class="time">12 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img">
                                            <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
                                            <span class="time">12 minutes ago</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                        <div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
                                            <span class="time">17 minutes ago</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    {{--                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">--}}
                    {{--                        <i class="fas fa-layer-group"></i>--}}
                    {{--                    </a>--}}
                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                        <div class="quick-actions-header">
                            <span class="title mb-1">Quick Actions</span>
                            <span class="subtitle op-8">Shortcuts</span>
                        </div>
                        <div class="quick-actions-scroll scrollbar-outer">
                            <div class="quick-actions-items">
                                <div class="row m-0">
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-file-1"></i>
                                            <span class="text">Generated Report</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-database"></i>
                                            <span class="text">Create New Database</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-pen"></i>
                                            <span class="text">Create New Post</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-interface-1"></i>
                                            <span class="text">Create New Task</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-list"></i>
                                            <span class="text">Completed Tasks</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-file"></i>
                                            <span class="text">Create New Invoice</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                if (starts_with(app('VoyagerAuth')->user()->avatar, 'http://') || starts_with(app('VoyagerAuth')->user()->avatar, 'https://')) {
                    $user_avatar = app('VoyagerAuth')->user()->avatar;
                } else {
                    $user_avatar = Voyager::image(app('VoyagerAuth')->user()->avatar);
                }
                ?>
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{$user_avatar}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="{{$user_avatar}}" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4></h4>
                                        {{--                                        <p class="text-muted">{{Auth::user()->email}}</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>--}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                {{--                                <div class="dropdown-divider"></div>--}}
                                {{--                                <a class="dropdown-item" href="#">My Profile</a>--}}
                                {{--                                <a class="dropdown-item" href="#">My Balance</a>--}}
                                {{--                                <a class="dropdown-item" href="#">Inbox</a>--}}
                                {{--                                <div class="dropdown-divider"></div>--}}
                                {{--                                <a class="dropdown-item" href="#">Account Setting</a>--}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesion</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    {{--                    <a href="#" class="nav-link quick-sidebar-toggler">--}}
                    {{--                        <i class="fa fa-th"></i>--}}
                    {{--                    </a>--}}
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{$user_avatar}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ucfirst(explode(" ", Auth::user()->name)[0])}}
									<span class="user-level">{{\TCG\Voyager\Models\Role::where('id',Auth::user()->role_id)->value('display_name')}}</span>
									<span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            {{--                            <li>--}}
                            {{--                                <a href="#profile">--}}
                            {{--                                    <span class="link-collapse">My Profile</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li>--}}
                            {{--                                <a href="#edit">--}}
                            {{--                                    <span class="link-collapse">Edit Profile</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            <li>
                                <a id="cambiarclave" href="#" data-toggle="modal" data-target=".modal-cambiarclave">
                                    <span class="link-collapse">Cambiar Clave</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('logout')}}">
                                    <span class="link-collapse">Cerrar Sesion</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @php
            echo Menu::display('main', 'vistas.include.supermenu');
            @endphp
        </div>
    </div>
</div>
<div class="modal modal-cambiarclave" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar Clave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
{{--            <form action="{{route('cambiarclave')}}" method="post">--}}
            <form action="#" method="post">
                {{csrf_field()}}
                <input type="text" name="clave" placeholder="Ingrese Nueva Clave">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Sidebar -->
