<?php
session_start();
error_reporting(0);

if(isset($_POST['CustomerReg']))
  {
    $_SESSION['category']='Customer';
    header('location:customerregistration.php');
  }
elseif(isset($_POST['DriverReg']))
{
  $_SESSION['category']='Driver';
  header('location:driverregistration.php');
}
elseif(isset($_POST['DriverAssisReg']))
{
  $_SESSION['category']='DriverAssistant';
  header('location:driverregistration.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="Fresh Flora in php and mysql">
  <meta name="description" content="Fresh Flora in php and mysql">
  <meta name="author" content="Sarita Pandey">

  <title>Freash flora Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <h3 align="center" style="color: white; padding-top: 2%">Fresh Flora</h3>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            

            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
					
                  </div>
               
                  <form class="user" method="post" action="">
				  <h4 style="color:black;">Register as a....</h4>
                                      
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="CustomerReg" value="Customer"></p>
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="DriverReg" value="Driver"></p>
					<p> <input type="submit" class="btn btn-primary btn-user btn-block" name="DriverAssisReg" value="Driver Assistant"></p>
                    
                  
                  </form>
                  <hr>
                  <div class="text-center">
                  <a class="small" href="freshfloraUserLogin.php">Already have an account? Login!</a>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
