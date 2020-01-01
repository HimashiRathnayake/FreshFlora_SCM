<?php  
 $connect = mysqli_connect("localhost", "root", "", "scm_db");  
 $query = "SELECT area, count(distinct order_ID) as number FROM customer natural join orders natural join order_details natural join store_route on customer.route_ID = store_route.route_ID natural join route_area group by route_ID order by number DESC";  
 $result = mysqli_query($connect, $query); 
 ?>
 <head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
 <table cellspacing="20">
 <tr>
	<th>route id</th>
	<th>Number of orders</th>
	</tr>
 <?php foreach ($result as $value){
	?>
	
	<tr>
	<td><?php echo $value["area"]; ?></td>
	<td><?php echo $value["number"]; ?></td>
	</tr>
	<?php 
 }
 ?>
 </head>
 </table>
 