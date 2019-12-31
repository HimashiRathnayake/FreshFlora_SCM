<?php
$db=require_once("includes/dbConfig.php");
$query1 = "call customer_order_count_procedure";
$resultSet1 = mysqli_query($db, $query1);
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
  <h2>Customer Order Report</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>No. Of Orders</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($resultSet1 as $value) {
    echo "<tr><td>".$value['name']."</td>";
    echo "<td>".$value['count']."</td></tr>";
}
?>
  </table>
</div>

</body>
</html>


