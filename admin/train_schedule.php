<?php
$db=require_once("includes/dbConfig.php");
$query1 = "insert into train_schedule values ( '".$_GET['trainID']."','". $_GET['orderID']."')";
$resultSet1 = mysqli_query($db, $query1);

$query2 = "select remaining_capacity from train where train_ID='".$_GET['trainID']."'";
$resultSet2 = mysqli_query($db, $query2);
$result=mysqli_fetch_array($resultSet2);
$new_remain_capacity= $result['remaining_capacity']-$_GET['capacity'];
echo $new_remain_capacity;
$query3 = "UPDATE train SET remaining_capacity=".$new_remain_capacity." WHERE train_ID='".$_GET['trainID']."'";
$resultSet1 = mysqli_query($db, $query3);

$query1 = "UPDATE orders SET order_status='shipped' WHERE order_ID='".$_GET['orderID']."'";
$resultSet1 = mysqli_query($db, $query1);

?>