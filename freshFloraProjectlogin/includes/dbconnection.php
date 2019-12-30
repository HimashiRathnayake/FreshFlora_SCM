<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_database='db_scm';

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
  
