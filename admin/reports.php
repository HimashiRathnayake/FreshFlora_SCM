<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fresh Flora</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
   body { 
  background: url(images/bkg/him1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} 
</style>
<?php include_once("./templates/header.php"); ?>

<div class="container">
  <br>
  <h2>Reports</h2><br>
  <button type="button" class="btn btn-outline-primary">Quarterly sales report</button><br><br>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/order_review.php'">Items with most orders </button><br><br>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/city_order_summary.php'">Sales report categorized according to main cities</button>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/route-order_summary.php'">Sales report categorized according to main routes</button><br><br>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/drivers_report.php'">Working Hours of Drivers</button>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/driver_assistants_report.php'">Working Hours of Driver Assistants</button>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/trucks_report.php'">Used hours of Trucks</button><br><br>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/customer_order_report.php'">Customer - Order Report</button><br><br>
 
</div>

</body>
</html>
