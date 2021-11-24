<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<?php include 'include/connect.php'?>

<?php
    $id=$_GET['id'];
    $sql = "SELECT booked.id,booked.name,booked.ic,booked.phoneno,booked.bookplace,booked.bookdate,booked.booktime,booked.payment,permit.status,permit.guider
                FROM booked INNER JOIN permit ON booked.id=permit.bookedid
                WHERE booked.id = $id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_array($result); // fetch data
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
                                            <input type="text" class="form-control" id="guider" name="guider" value="<?php echo $data['guider'] ?>"  readonly>

                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Status</label>
                                            <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status'] ?>" readonly>
                                        </div>
                                        </div>
                                        <input type="hidden" id="bookedid" name="bookedid" value="<?php echo $data['id'] ?>">
                                        <div class="text-right">
                                        
                                        <a href="bookedpermit.php"><button type="button" id="cancel" class="btn btn-gradient-info">Cancel</button></a>
                                        <button type="submit" id="butdelete" class="btn btn-gradient-danger">Delete</button>
                                        
                                        </div>
                                        <?php $conn->close(); ?>
                                    </form>   

                                    
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
	        $('#butdelete').on('click', function() {
		    $("#butdelete").attr("disabled", "disabled");
		    var id = $('#bookedid').val();
	    	if(id!=""){
	    		$.ajax({
	    			url: "include/deletepermit.php",
	    			type: "POST",
	    			data: {
	    				id: id		
		    		},
		    		cache: false,
		    		success: function(dataResult){
		    		var dataResult = JSON.parse(dataResult);
		    		if(dataResult.statusCode==200){
						$("#butdelete").removeAttr("disabled");
                        alert("Permit Deleted !"); 
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