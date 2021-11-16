<?php include 'head.php'?>


<body class="dark-sidenav">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="main.php" class="logo">
                <span>
                    <img src="./assets/images/mountain.png" alt="logo-large" class="logo-lg logo-light" style=" height: 50px;">
                </span>
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti-bell noti-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                        <h6
                            class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                            Notifications <span class="badge badge-light badge-pill">2</span>
                        </h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">2 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-primary">
                                        <i class="la la-cart-arrow-down text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">10 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-success">
                                        <i class="la la-group text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a
                                            reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">40 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-pink">
                                        <i class="la la-list-alt text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">1 hr ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-warning">
                                        <i class="la la-truck text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a
                                            reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">2 hrs ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-info">
                                        <i class="la la-check-circle text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="./assets/images/user.png" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="/"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile waves-effect waves-light">
                        <i class="ti-menu nav-icon"></i>
                    </button>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
                        <a href=""><i class="fas fa-search"></i></a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->


    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="main.php"><i class="ti-bar-chart"></i><span>Dashboard</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            </li>

            <li>
                <a href="bookedpermit.php"><i class="ti-server"></i><span>Booked Permit </span>
                         <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            </li>
        </ul>
    </div>
    <!-- end left-sidenav-->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="main.php">Main</a></li>
                                    <li class="breadcrumb-item"><a href="bookedpermit.php">Booked Permit</a></li>
                                    <li class="breadcrumb-item active">Booked Permit Details</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Booked Permit Details</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                    <form>
                                    <h4 class="mt-0 header-title">Permit Details</h4>
                                        <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Payment</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="RM 100" readonly>
                                        </div>  
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Place</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gunung Ganang" readonly>
                                        </div>
                                           <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Time</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="8:30 AM" readonly>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputPassword1">Date</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="30/11/2020" readonly>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputPassword1">Guider</label>
                                            <select class="form-control" name="guider">
                                                <option>Ali</option>
                                                <option>Abu</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputPassword1">Status</label>
                                            <select class="form-control" name="status">
                                                <option>Approved</option>
                                                <option>Rejected</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="text-right">
                                            <a href="bookedpermit.php">
                                        <button type="button" class="btn btn-gradient-danger">Cancel</button></a>
                                            <a href="bookedpermit.php">
                                        <button type="button" class="btn btn-gradient-success">Submit</button></a>

                                        </div>
                                        
                                    </form>   

<hr>
</br>

                                        <h4 class="mt-0 header-title">Hikers Details</h4>

                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>IC</th>
                                        <th>Phone Number</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <tr>
                                        <td>Test</td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Test2</td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Test3</td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Test4<</td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Test5</td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>        
                                <br>
                                                                                
                                </div><!--end row-->  
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->  

            </div><!-- container -->

            
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/metismenu.min.js"></script>
    <script src="./assets/js/waves.js"></script>
    <script src="./assets/js/feather.min.js"></script>
    <script src="./assets/js/jquery.slimscroll.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>

    <script src="./plugins/apexcharts/apexcharts.min.js"></script>
    <script src="./assets/pages/jquery.helpdesk-dashboard.init.js"></script>

    <script src="./assets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- App js -->
    <script src="./assets/js/app.js"></script>
    <script>
        $('#datatable').DataTable();
    </script>

</body>

</html>