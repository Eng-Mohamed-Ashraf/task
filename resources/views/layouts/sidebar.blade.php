<?php
$url=Url()->current();

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link text-center d-block">
        <img src="{{getfile($settings['logo']??0)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <br>
        <span class="brand-text font-weight-light">{{$settings['name']??''}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{getfile(auth('admin')->user()['image'])}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth('admin')->user()['name']}}</a>
            </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <input class="from-controller" id="side_search" placeholder="Search in list">
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills  nav-sidebar flex-column" id="navbar-vertical-content" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link @if($url==asset('/'))) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>

                <li class="nav-item ">
                    <a href="{{route('tasks.index')}}" class="nav-link @if(preg_match('/tasks/i',$url)) active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tasks</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('users.index')}}" class="nav-link @if(preg_match('/users/i',$url)) active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>users</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
