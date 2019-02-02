<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>

    <title>KUSIMS</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav
            class="main-header navbar navbar-expand bg-white navbar-light border-bottom"
    >
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"
                ><i class="fa fa-bars"></i
                    ></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input
                        class="form-control form-control-navbar"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                />
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img
                    src="./img/logo.jpg"
                    alt="KUSIMS"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8"

            />
            <span class="brand-text font-weight-light">KUSIMS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img
                            src="./img/profile.png"
                            class="img-circle elevation-2"
                            alt="User Image"
                    />
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        {{ Auth::user()->name }}</a
                    >
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul
                        class="nav nav-pills nav-sidebar flex-column"
                        data-widget="treeview"
                        role="menu"
                        data-accordion="false"
                >
                    <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i
                                    class="nav-icon fas fa-tachometer-alt"
                            ></i>
                            <p>Dashboard</p>
                        </a>
                    </li>  -->

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav fa fa-cog"></i>
                            <p>
                                Manage
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i
                                            class="nav-icon fas fa-building"
                                    ></i>
                                    <p>Add Department</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i
                                            class="nav-icon fas fa-school"
                                    ></i>
                                    <p>Add School</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i
                                            class="nav-icon fas fa-user"
                                    ></i>
                                    <p>Add Admin</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i
                                            class="nav-icon fas fa-user-cog"
                                    ></i>
                                    <p>Manage Admin</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/logout')}}" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid"><!-- /.row --></div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid"></div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            KUSIMS
        </div>
        <!-- Default to the left -->
        <strong
        >Copyright &copy; 2019-2020
            <a href="https://ku.edu.np/docse">Department of Computer Science and Engineering</a>.</strong
        >
        All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="/js/app.js"></script>
</body>
</html>
