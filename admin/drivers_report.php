<?php
$db=require_once("includes/dbConfig.php");
$query = "select driver_ID, concat(first_name,' ',last_name) as driver_name from driver";
$resultSet = mysqli_query($db, $query);
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

  <h2>Working Hours of Drivers</h2><br>

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

  


  

</div>

</body>
</html>



