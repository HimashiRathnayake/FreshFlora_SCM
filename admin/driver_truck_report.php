<?php
$db=require_once("includes/dbConfig.php");
$query = "select driver_ID, concat(first_name,' ',last_name) as driver_name from driver";
$resultSet = mysqli_query($db, $query);
$query3 = "select driver_assistant_ID, concat(first_name,' ',last_name) as driver_ass_name from driver_assistant";
$resultSet3 = mysqli_query($db, $query3);
$query5 = "select truck_no from truck";
$resultSet5 = mysqli_query($db, $query5);
?>
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

<div class="container">
  <h2>Customer Order Report</h2><br>

  <h4>Drivers</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Driver Name</th>
        <th>No. Of Working Hours</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($resultSet as $value) {
    $query1 = "select driver_hours(".$value['driver_ID'].") as driver_hours";
    $resultSet1 = mysqli_query($db, $query1);
    $result=mysqli_fetch_assoc($resultSet1);
    echo "<tr><td>".$value['driver_name']."</td>";
    echo "<td>".$result['driver_hours']."</td></tr>";
    
}
?>
  </table>

  <h4>Driver Assistants</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Driver Assistant Name</th>
        <th>No. Of Working Hours</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($resultSet3 as $value) {
    $query4 = "select driver_assistant_hours(".$value['driver_assistant_ID'].") as driver_ass_hours";
    $resultSet4 = mysqli_query($db, $query4);
    $result1=mysqli_fetch_assoc($resultSet4);
    echo "<tr><td>".$value['driver_ass_name']."</td>";
    echo "<td>".$result1['driver_ass_hours']."</td></tr>";
    
}
?>
  </table>


  <h4>Used Hours of Trucks</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Truck No.</th>
        <th>Used hours</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($resultSet5 as $value) {
    $query5 = "select truck_hours(".$value['truck_no'].") as truck_hours";
    $resultSet5 = mysqli_query($db, $query5);
    $result5=mysqli_fetch_assoc($resultSet5);
    echo "<tr><td>".$value['truck_no']."</td>";
    echo "<td>".$result5['truck_hours']."</td></tr>";
    
}
?>
  </table>

</div>

</body>
</html>



