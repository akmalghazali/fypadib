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
                                            <input type="text" class="form-control"  placeholder="RM 100" readonly>
                                        </div>  
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Place</label>
                                            <input type="email" class="form-control"  placeholder="Gunung Ganang" readonly>
                                        </div>
                                           <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Time</label>
                                            <input type="email" class="form-control"  placeholder="8:30 AM" readonly>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Date</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="30/11/2020" readonly>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Guider</label>
                                      <input type="text" class="form-control"  >

                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>Approved</option>
                                                <option>Rejected</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="text-right">
                                     
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



    <script>
        $('#datatable').DataTable();
    </script>
<?php include 'footer.php'?>

</body>

</html>