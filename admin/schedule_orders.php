<?php
$db=require_once("includes/dbConfig.php");

$query1 = "SELECT order_ID, concat(first_name,' ',last_name) as name ,area,order_date FROM orders natural join customer where order_status='placed'";
$resultSet1 = mysqli_query($db, $query1);

$no=0;?>

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
  <h2>Placed Orders</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Customer Name</th>
        <th>Area</th>
        <th>Order Capacity</th>
        <th>Order Date</th>
        <th>Available Trains</th>
      </tr>
    </thead>
    <tbody>

<?php
foreach ($resultSet1 as $value){
    $no +=1;
    $id=$value['order_ID'];
    $query2= "select get_order_capacity($id) as capacity";
    $resultSet2 = mysqli_query($db, $query2);
    $result=mysqli_fetch_array($resultSet2);

    echo "<tr><td>".$no."</td>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['area']."</td>";
    echo "<td>".$result['capacity']."</td>";
    echo "<td>".$value['order_date']."</td>";
    ?>
    <td>
      <input type='hidden' value="<?php echo $result['capacity'] ?>"></input>
        <input type='hidden' value="<?php echo $id ?>"></input>
        <ul name='category' id='category'>
        <?php   
        //get train list
        $query2 = "select train_ID,arrival_time,delivery_time from train where delivery_place='".$value['area']."' and remaining_capacity>='".$result['capacity']."'";
        $resultSet2 = mysqli_query($db, $query2); 
        foreach ($resultSet2 as $value2) {
        ?>
            <a href='train_schedule.php?trainID=<?php echo $value2['train_ID']?>&orderID=<?php echo $id?>&capacity=<?php echo $result['capacity']?>'>
            <li><?php echo($value2['arrival_time'].':'.$value2['delivery_time']);?></li></a>
        <?php 
        
        }?>
    </ul></td>

<?php  
}
?>
</tbody>
</table>