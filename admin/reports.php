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

<?php include_once("./templates/header.php"); ?>

<div class="container">
  <br>
  <h2>Reports</h2><br>
  <button type="button" class="btn btn-outline-primary">Quarterly sales report</button><br><br>
  <button type="button" class="btn btn-outline-primary">Items with most orders </button><br><br>
  <button type="button" class="btn btn-outline-primary">Sales report categorized according to main cities and routes</button><br><br>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/driver_truck_report.php'">Working Hours of Drivers/ Driver Assistants and Used hours of Trucks</button><br><br>
  <button type="button" class="btn btn-outline-primary" onclick="location.href='http://localhost/FreshFlora_SCM/admin/customer_order_report.php'">Customer - Order Report</button><br><br>
 
</div>

</body>
</html>
