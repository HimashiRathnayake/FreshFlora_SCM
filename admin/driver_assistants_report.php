<?php
$db=require_once("includes/dbConfig.php");

$query3 = "select driver_assistant_ID, concat(first_name,' ',last_name) as driver_ass_name from driver_assistant";
$resultSet3 = mysqli_query($db, $query3);

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

  <h4>Working Hours of Driver Assistants</h4>
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



</div>

</body>
</html>



