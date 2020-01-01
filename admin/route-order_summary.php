<?php  
 $connect = mysqli_connect("localhost", "root", "", "db_scm");  
 $query = "SELECT destination, city, count(distinct order_ID) as number FROM customer natural join orders natural join order_details natural join store_route natural join route_area natural join store group by route_ID order by number DESC";  
 $result = mysqli_query($connect, $query); 
 ?>
 <head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
 <table cellspacing="20">
 <tr>
	<th>Route</th>
	<th>Number of orders</th>
	</tr>
 
 <?php foreach ($result as $value){
	?>
	
	<tr>
	<td><?php echo $value["city"]+"-"+$value["destination"]; ?></td>
	<td><?php echo $value["number"]; ?></td>
	</tr>
	<?php 
 }
 ?>
 </head>
 </table>
 