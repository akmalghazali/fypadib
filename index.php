<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App css -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
    
    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    
                                    <div class="text-center auth-logo-text">
                                        <h1 class="mt-0 mb-3 mt-5" style="font-family: 'Cabin', sans-serif;">HIKINGKE</h1>
                                        <p class="text-muted mb-0">Sign in to continue.</p>  
                                    </div> <!--end auth-logo-text-->  
    
                                    
                                    <form class="form-horizontal auth-form my-4" action="main.php">
            
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i> 
                                                </span>                                                                                                              
                                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                                            </div>                                    
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i> 
                                                </span>                                                       
                                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                            </div>                               
                                        </div><!--end form-group--> 
            
                 
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button onclick="window.location.href='./main.php'" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                         
                            </div><!--end card-body-->
                        </div><!--end card-->
                       
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


<?php include 'footer.php'?>
   
        
    </body>

</html>