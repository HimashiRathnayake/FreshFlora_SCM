<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(strlen($_SESSION['id']==0))
{
  header('location:freshfloraforgetpassword.php');
} 
else {
if(isset($_POST['submit']))
  {
    $Category=$_SESSION['category'];
    $id=$_SESSION['id'];
    $email=$_SESSION['email'];
    $password=$_POST['newpassword'];
    echo $id;
    if($Category=='Customer'){
      
      $query=mysqli_query($con,"update customer set password='$password' where customer_ID=$id && email='$email'  ");
    }
    else if($Category=='Driver'){
      $query=mysqli_query($con,"update driver set password='$password' where driver_ID=$id && email='$email'  ");
    }
    else{
      $query=mysqli_query($con,"update driver_assistant set password='$password' where driver_assistant_ID=$id && email='$email'  ");
    }
    
   if($query)
   {
    
      echo "<script>alert('Password successfully changed');</script>";
      session_destroy();
   }
  
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

  <title>Fresh Flora user Reset</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword();
return false;
}
return true;
} 

</script>

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
                    <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  </div>
                  <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                  <form class="user" name="changepassword" method="post" onsubmit="return checkpass();">
                                           
                    
                    <div class="form-group">
                      <input type="Password" class="form-control form-control-user" id="newpassword" name="newpassword" value="" required="true" placeholder="Enter Your New Password" required="true" >
                    </div>

                     <div class="form-group">
                      <input type="Password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword" value="" required="true" placeholder="Confirm Your Password" required="true">
                    </div>
                  
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Reset"></p>

                    <hr>
                  
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php } ?>