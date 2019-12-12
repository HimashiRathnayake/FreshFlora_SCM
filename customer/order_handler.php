<?php
session_start();
$db=require_once("includes/dbConfig.php");

$total=0;
foreach ($_SESSION['cart'] as $key => $value) {
    $total+=$value['selling_price'];

}

$customer_ID=$_SESSION['customer_ID'];
$payment=$total;
$payment_method=$_POST['payment_method'];
$order_date=date("Y-m-d");

//If error: Check in databse orderId should be auto increment
$query1 = "INSERT into orders (customer_ID,payment,payment_method,order_date) values ('".$customer_ID."','".$payment."','".$payment_method."','".$order_date."')";
$resultSet1 = mysqli_query($db, $query1);

$query2 = "SELECT * FROM orders ORDER BY order_ID DESC LIMIT 1";
$resultSet2 = mysqli_query($db, $query2);
$result = mysqli_fetch_assoc($resultSet2);
$order_ID=$result['order_ID'];

foreach ($_SESSION['cart'] as $key => $value) {
    $product_ID=$value['product_ID'];
    $quantity_ordered=$value['quantity'];
    $query3 = "INSERT into order_details (order_ID,product_ID,quantity_ordered) values ('".$order_ID."','".$product_ID."','".$quantity_ordered."')";
    $resultSet3 = mysqli_query($db, $query3);
}

unset($_SESSION['cart']);
header('Location: http://localhost/FreshFlora_SCM/customer/order.php?status=success');

