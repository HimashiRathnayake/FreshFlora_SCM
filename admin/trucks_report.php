<?php
$db=require_once("includes/dbConfig.php");

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

  <h2>Used Hours of Trucks</h2><br>


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






