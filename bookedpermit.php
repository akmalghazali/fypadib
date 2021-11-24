<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<?php include 'include/connect.php'?>

<?php
$sql = "SELECT booked.id,booked.name,booked.ic,booked.phoneno,booked.bookplace,permit.status,permit.guider
        FROM booked INNER JOIN permit ON booked.id=permit.bookedid";
$result = $conn->query($sql);
?>

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
                                        <?php 
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>";
                                                    echo "<p class='d-inline-block align-middle mb-0'>";
                                                    echo "<a href='show.php?id=". $row["id"]."' class='d-inline-block align-middle mb-0 product-name'>". $row["name"]."</a> ";
                                                    echo "<br>";
                                                    echo "</p>";
                                                    echo "</td>";
                                                    echo "<td>". $row["ic"]."</td>";
                                                    echo "<td>". $row["phoneno"]."</td>";
                                                    echo "<td>". $row["bookplace"]."</td>";
                                                    echo "<td>". $row["status"]."</td>";
                                                    echo "<td>". $row["guider"]."</td>";
                                                    echo "<td>";
                                                    echo "<a href='deleteshow.php?id=". $row["id"]."'><i class='far fa-trash-alt text-danger'></i></a>"; 
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    }
                                                }$conn->close();
                                        ?>
                                    
                                    
                                    
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