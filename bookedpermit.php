<?php include 'header.php'?>
<?php include 'sidebar.php'?>


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
                                    <li class="breadcrumb-item active">Booked Permit</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Booked Permit</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Booked Permit List</h4>
                         

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>IC</th>
                                        <th>Phone Number</th>
                                        <th>Booked Place</th>
                                        <th>Status</th>
                                        <th>Guiders</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <tr>
                                        <td>
                                            <p class="d-inline-block align-middle mb-0">
                                                <a href="show.php" class="d-inline-block align-middle mb-0 product-name">Test</a> 
                                                <br> 
                                            </p>
                                        </td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        <td>Gunung Kinabalu</td>
                                        <td>Approved</td> 
                                        <td>Ali</td>
                                        <td>
                                            <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="d-inline-block align-middle mb-0">
                                                <a href="" class="d-inline-block align-middle mb-0 product-name">Test2</a> 
                                                <br> 
                                            </p>
                                        </td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        <td>Gunung Dayang Bunting</td>
                                        <td>Approve</td> 
                                        <td>Abu</td>
                                        <td>
                                            <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="d-inline-block align-middle mb-0">
                                                <a href="" class="d-inline-block align-middle mb-0 product-name">Test3</a> 
                                                <br> 
                                            </p>
                                        </td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        <td>Gunung Ganang</td>
                                        <td>No Status</td> 
                                        <td>No Guider</td>
                                        <td>
                                            <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="d-inline-block align-middle mb-0">
                                                <a href="" class="d-inline-block align-middle mb-0 product-name">Test4</a> 
                                                <br> 
                                            </p>
                                        </td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        <td>Bukit Bukau</td>
                                        <td>Rejected</td> 
                                        <td>No Guider</td>
                                        <td>
                                            <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="d-inline-block align-middle mb-0">
                                                <a href="" class="d-inline-block align-middle mb-0 product-name">Test5</a> 
                                                <br> 
                                            </p>
                                        </td>
                                        <td>12345678</td>
                                        <td>0129282123</td>
                                        <td>Bukit Tinggi Rendah</td>
                                        <td>Rejected</td> 
                                        <td>No Guider</td>
                                        <td>
                                            <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>        
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->  

            </div><!-- container -->

            
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




<?php include 'footer.php'?>

</body>

</html>