<?php
$db=require_once("includes/dbConfig.php");

$today=date("Y-m-d");
$time=date("h:i:sa"); //02:53:04pm
$area="Colombo";
$query1 = "SELECT * FROM orders where order_status='placed'";
$resultSet1 = mysqli_query($db, $query1);
foreach ($resultSet1 as $value){
    echo $value['order_ID']."<br>";
}


?>