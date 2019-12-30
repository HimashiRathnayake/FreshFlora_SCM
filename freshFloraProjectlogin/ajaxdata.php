<?php
	include('includes/dbconnection.php');
	$output='';
	$area=$_POST['areaID'];
	
//$sql = "select distinct(route_ID) from route_area where area='$area' ";
	$sql="select route_ID, GROUP_CONCAT(area) area from route_area where route_ID in (select distinct(route_ID) from route_area where area='$area' ) group by route_ID";
	$result= mysqli_query($con, $sql);
	$output = '<option value="" selected disabled>select your route</option>';
	while($row=mysqli_fetch_array($result))
  	{
		//$output .= '<option value="'.$row["route_id"].'">'.$row["route_ID"].'- '.$row["area"].'</option>';
		//$output .= '<option value="'.$row["route_id"].'">'.$row["route_ID"].'</option>';
		$output .='<option>'.$row["route_ID"].'- '.$row["area"].'</option>';
	}
	echo $output;
?>