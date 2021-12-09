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
                                                    echo "<a data-id='".$row["id"]."' title='Delete Booked' class='open-deletebooked' href='#deleteBookedModal'><i class='far fa-trash-alt text-danger'></i></a>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    }
                                                }$conn->close();
                                        ?>

                                                <div class="modal fade" id="deleteBookedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="exampleModalLabel">Are You Sure To Delete This Booked?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form id="bookeddeleteform" name="bookeddeleteform" method="post">
                                                            <input type="text" name="deletebookedid" id="deletebookedid" value=""/>
                                                            <div style="text-align: right">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="deletebookedbut" class="btn btn-danger">Delete</button>
                                                            </div>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                        </div>
                                    
                                    
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

<script>

    
$(document).ready(function() {
    $('#deletebookedbut').on('click', function() {
		    $("#deletebookedbut").attr("disabled", "disabled");
            var deletebookedid = $('#deletebookedid').val();
	    	if(deletebookedid!=""){
	    		$.ajax({
	    			url: "include/deletebooked.php",
	    			type: "post",
	    			data: {
                        deletebookedid: deletebookedid				
		    		},
		    		cache: false,
		    		success: function(dataResult){
		    		var dataResult = JSON.parse(dataResult);
		    		if(dataResult.statusCode==200){
						$("#deletebookedbut").removeAttr("disabled");
                        alert("Booked Deleted !");
                        window.location.reload(); 						
					}
					else if(dataResult.statusCode==201){
                    
					   alert("Error occured !");
                       window.location.reload(); 		
					}
					
				}
			    });
            }
		
		else{
			alert('Please fill Booked Name !');
		}
	});
});

$(document).on("click", ".open-deletebooked", function (e) {
    e.preventDefault();
    var _self = $(this);
    var id = _self.data('id');
    $("#deletebookedid").val(id);
    $(_self.attr('href')).modal('show');
    });
</script>
</body>

</html>