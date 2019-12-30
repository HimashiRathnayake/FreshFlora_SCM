<?php
$mysql_host='127.0.0.1:3307';
$mysql_user='root';
$mysql_password='test';
$mysql_database='db_scm';

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
  
