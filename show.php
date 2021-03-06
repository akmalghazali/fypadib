<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<?php include 'include/connect.php'?>

<?php
    $id=$_GET['id'];
    $sql1 = "SELECT booked.id,booked.name,booked.ic,booked.phoneno,booked.bookplace,booked.bookdate,booked.booktime,booked.payment,permit.status,permit.guider
                FROM booked INNER JOIN permit ON booked.id=permit.bookedid
                WHERE booked.id = $id";
    $result1 = $conn->query($sql1);
    $data = mysqli_fetch_array($result1); // fetch data

    $sql2 = "SELECT booked.id,hiker.id,hiker.name,hiker.ic,hiker.phoneno,hiker.bookedid
                FROM booked INNER JOIN hiker ON booked.id=hiker.bookedid
                WHERE booked.id = $id";
    $result2 = $conn->query($sql2);
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
                                    <form id="formBooked" name="formBooked" method="post">
                                    <h4 class="mt-0 header-title">Permit Details</h4>
                                        <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Payment</label>
                                            <input type="text" class="form-control" name="payment"  value="RM <?php echo $data['payment'] ?>" readonly>
                                        </div>  
                                        <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Place</label>
                                            <input type="email" class="form-control" name="bookplace" value="<?php echo $data['bookplace'] ?>"  readonly>
                                        </div>
                                           <div class="form-group col-lg-6">
                                            <label for="exampleInputEmail1">Time</label>
                                            <input type="text" class="form-control"  name="booktime" value="<?php echo date('h:i A', strtotime($data['booktime'])) ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Date</label>
                                            <input type="text" class="form-control"  name="bookdate" value="<?php echo date('d-m-Y', strtotime($data['bookdate'])) ?>" readonly>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Guider</label>
                                            <input type="text" class="form-control" id="guider" name="guider" value="<?php echo $data['guider'] ?>"  >

                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="<?php echo $data['status']?>"disabled selected hidden><?php echo $data['status'] ?></option>
                                                <option value="No Status">No Status</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Rejected">Rejected</option>
                                            </select>
                                        </div>
                                        </div>
                                        <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>">
                                        <div class="text-right">
                                        
                                        <button type="submit" id="butsubmit" class="btn btn-gradient-success">Submit</button>   
                                        
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
                                        <td><?php echo $data['name'] ?></td>
                                        <td><?php echo $data['ic'] ?></td>
                                        <td><?php echo $data['phoneno'] ?></td>
                                       
                                    </tr>
                                    <?php 
                                        if ($result2->num_rows > 0) {
                                            // output data of each row
                                            while($row2 = $result2->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>". $row2["name"]."</td>";
                                                echo "<td>". $row2["ic"]."</td>";
                                                echo "<td>". $row2["phoneno"]."</td>";
                                                echo "</tr>";
                                            }
                                        }$conn->close();
                                      ?>
                                    
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
        $(document).ready(function() {
	        $('#butsubmit').on('click', function() {
		    $("#butsubmit").attr("disabled", "disabled");
		    var id = $('#id').val();
            var status = $('#status').val();
            var guider = $('#guider').val();
	    	if(id!="" && status!="" && guider!=""){
	    		$.ajax({
	    			url: "include/editpermit.php",
	    			type: "POST",
	    			data: {
	    				id: id,
                        status: status,
                        guider: guider		
		    		},
		    		cache: false,
		    		success: function(dataResult){
		    		var dataResult = JSON.parse(dataResult);
		    		if(dataResult.statusCode==200){
						$("#butsubmit").removeAttr("disabled");
                        alert("Updated !"); 
                        window.location.replace('bookedpermit.php');		
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			    });
            }
		
		else{
			alert('Please fill all the field !');
		}
	});
}); 

</script>
<?php include 'footer.php'?>

</body>

</html>