<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alumin - Dashboard</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Alumin Dashboard Admin" />
        <meta name="author" content="Potenza Global Solutions" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- fontawesome Icon -->
        <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
        <!-- bootstrap-icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- app favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('user/assets/img/image 1.png')}}">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <!-- plugin stylesheets -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('user/assets/css/vendors.css')}}" />
        <!-- app style -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('user/assets/css/style.css')}}" />4
        <!-- chart -->
        
    </head>
    <body>
        <!-- begin app -->
        <div class="app">
            <!-- begin app-wrap -->
                <!-- begin app-header -->
                <header class="app-header top-bar">
                    <!-- begin navbar -->
                    <nav class="navbar navbar-expand-md">

                        <!-- begin navbar-header -->
                        <div class="navbar-header d-flex align-items-center">
                            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                            <a class="navbar-brand" href="#">
                                <img src="{{ URL::asset('user/assets/img/image 1.png')}}" draggable="false" class="img-fluid logo-desktop" alt="logo" />
                                <img src="{{ URL::asset('user/assets/img/image 1.png')}}" draggable="false" class="img-fluid logo-mobile" alt="logo" />
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti ti-align-left"></i>
                        </button>
                        <!-- end navbar-header -->
                        <!-- begin navigation -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navigation d-flex">
                                <ul class="navbar-nav nav-left">
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                            <i class="ti ti-align-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav nav-right ml-auto">
                                    <li class="nav-item dropdown">
                                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                            
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-bell"></i>
                                            <span class="notify">
                                                        <span class="blink"></span>
                                            <span class="dot"></span>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
                                                    <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                        <span class="font-13"> Clear all</span></a>
                                                </li>
                                                <li class="dropdown-body min-h-240 nicescroll">
                                                    <ul class="scrollbar scroll_dark max-h-240">
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <div class="notification d-flex flex-row align-items-center">
                                                                    <div class="notify-icon bg-img align-self-center">
                                                                        <div class="bg-type bg-type-md">
                                                                            <span>HY</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="notify-message">
                                                                        <p class="font-weight-bold">New registered user</p>
                                                                        <small>Just now</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <div class="notification d-flex flex-row align-items-center">
                                                                    <div class="notify-icon bg-img align-self-center">
                                                                        <div class="bg-type bg-type-md bg-success">
                                                                            <span>GM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="notify-message">
                                                                        <p class="font-weight-bold">New invoice received</p>
                                                                        <small>22 min</small>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <div class="notification d-flex flex-row align-items-center">
                                                                    <div class="notify-icon bg-img align-self-center">
                                                                        <div class="bg-type bg-type-md bg-danger">
                                                                            <span>FR</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="notify-message">
                                                                        <p class="font-weight-bold">Server error report</p>
                                                                        <small>7 min</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <div class="notification d-flex flex-row align-items-center">
                                                                    <div class="notify-icon bg-img align-self-center">
                                                                        <div class="bg-type bg-type-md bg-info">
                                                                            <span>HT</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="notify-message">
                                                                        <p class="font-weight-bold">Database report</p>
                                                                        <small>1 day</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <div class="notification d-flex flex-row align-items-center">
                                                                    <div class="notify-icon bg-img align-self-center">
                                                                        <div class="bg-type bg-type-md">
                                                                            <span>DE</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="notify-message">
                                                                        <p class="font-weight-bold">Order confirmation</p>
                                                                        <small>2 day</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-footer">
                                                    <a class="font-13" href="javascript:void(0)"> View All Notifications
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown user-profile">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ URL::asset('user/assets/img/avtar/09.jpg')}}" alt="avtar-img">
                                            <span class="bg-success user-status"></span>
                                        </a>
                                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                            <div class="bg-gradient px-4 py-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="mr-1">
                                                        <h4 class="text-white mb-0">Mr Hamzat</h4>
                                                        <small class="text-white">hmztadeleke@gmail.com</small>
                                                    </div>
                                                    <a href="#" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                    class="zmdi zmdi-power"></i></a>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                    <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                    <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                    <span class="badge badge-primary ml-auto">6</span>
                                                </a>
                                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                    <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                                </a>
                                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                    <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <a class="bg-light p-3 text-center d-block" href="#">
                                                            <i class="fe fe-mail font-20 text-primary"></i>
                                                            <span class="d-block font-13 mt-2">My messages</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="bg-light p-3 text-center d-block" href="#">
                                                            <i class="fe fe-plus font-20 text-primary"></i>
                                                            <span class="d-block font-13 mt-2">Compose new</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end navigation -->
                    </nav>
                    <!-- end navbar -->
                </header>
                <!-- end app-header -->
                <!-- begin app-container -->
                <div class="app-container">
                    <!-- begin app-nabar -->
                    <aside class="app-navbar">
                        <!-- begin sidebar-nav -->
                        <div class="sidebar-nav scrollbar scroll_light">
                            <ul class="metismenu " id="sidebarNav">
                                <li>
                                    <a href="/admin" aria-expanded="false">
                                        <img src="{{ URL::asset('user/assets/img/monitor 1.png')}}" draggable="false" alt="">
                                        <span class="nav-title">
                                            Dashboard
                                        </span>
                                    </a> 
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)"      aria-expanded="false">
                                        <img src="{{ URL::asset('user/assets/img/monitor 1 (1).png')}}" draggable="false" alt="">
                                        <span class="nav-title">
                                            Member
                                        </span>
                                    </a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="addmember">
                                                Add a member
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="viewmember">
                                                View all members
                                            </a>
                                        </li>
                                        <li>
                                            <a href="suspended">
                                                Disable / suspend member
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)"      aria-expanded="false">
                                        <img src="{{ URL::asset('user/assets/img/coin 1 (1).png')}}" draggable="false" alt="">
                                        <span class="nav-title">
                                            Messages
                                        </span>
                                    </a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="createmessage">
                                                Create a message / notification
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="viewreply">
                                                View replies from members
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)"      aria-expanded="false">
                                        <img src="{{ URL::asset('user/assets/img/active (1) 1.png')}}" draggable="false" alt="">
                                        <span class="nav-title">
                                            Payment
                                        </span>
                                    </a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="createpayment">
                                                Create payment request
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="viewpayment">
                                                View all payments from members
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)"      aria-expanded="false">
                                        <img src="{{ URL::asset('user/assets/img/setting 1.png')}}" draggable="false" alt="">
                                        <span class="nav-title">
                                            Settings
                                        </span>
                                    </a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="#">
                                                Edit profile
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="/log-out">
                                                Log out
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end sidebar-nav -->
                    </aside>
                    <!-- end app-navbar -->
                    <!-- begin app-main -->
                    <div class="app-main" id="main">
                        <!-- begin container-fluid -->
                        <div class="container-fluid">
                            <!-- begin row -->
                            <div class="row">
                                <div class="col-md-12 m-b-10">
                                    <!-- begin page title -->
                                    <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                        <div class="page-title mr-4 pr-4 border-right">
                                            <h4 class="hey">
                                            </h4>
                                        </div>
                                    </div>
                                    
                                    <!-- end page title -->
                                </div>
                            </div>
                            <!-- begin row -->
                            
                            <!-- Services -->
                            <div class="row">
                                <div class="col-md-12 m-b-30">
                                    <!-- begin page title -->
                                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                        <div class="page-title mb-2 mb-sm-0">
                                            <h1>Notification</h1>
                                        </div>
                                        <div class="ml-auto d-flex align-items-center">
                                            <nav>
                                                <ol class="breadcrumb p-0 m-b-0">
                                                    
                                                    <li class="breadcrumb-item">
                                                        Home
                                                    </li>
                                                    <li class="breadcrumb-item active text-primary" aria-current="page">Notification</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="lengthh">

                                    </div>
                                </div>
                            </div>
                             <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                        <div class="page-title mb-2 mb-sm-0">
                                            <p>Showing 1-20 of 1,569</p>
                                        </div>      
                                <div class="ml-auto d-flex align-items-center">
                            <nav aria-label="Page navigation example" style="float: right">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                                </div>
                            
                            <!-- Services Ends -->
                            <!-- end row -->
                        </div>
                        <!-- end container-fluid -->
                    </div>
                    <!-- end app-main -->
                </div>
                <!-- end app-container -->
                <!-- begin footer -->
                {{-- <footer class="footer">
                    <div class="row">
                        <div class="col-12 col-sm-12 text-center">
                            <p>&copy; Copyright 2022. All rights reserved.</p>
                            
                        </div>
                        <div class="line"></div>
                    </div>
                </footer> --}}
                <!-- end footer -->
            </div>
            <!-- end app-wrap -->
        </div>
        <!-- end app -->

        <!-- plugins -->
        <script src="{{ URL::asset('user/assets/js/vendors.js')}}"></script>

        <!-- custom app -->
        <script src="{{ URL::asset('user/assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </body>
</html>