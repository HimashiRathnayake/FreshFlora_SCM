<?php  
 $connect = mysqli_connect("localhost", "root", "", "scm_db");  
 $query = "SELECT city, count(distinct order_ID) as number FROM customer natural join orders natural join order_details natural join store_route natural join store group by store_ID order by number DESC";  
 $result = mysqli_query($connect, $query); 
 ?>
  <head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
   </head>
   
<div>	
	<div class ="table_topic">
		<h1 align = 'center'> City-Order Summary </h1>
	</div>
	
		<table align = "left" >
			<tr>
				<th>City</th>
				<th>Number of orders</th>
			</tr>
	 <?php foreach ($result as $value){
		?>
		
			<tr>
				<td><?php echo $value["city"]; ?></td>
				<td><?php echo $value["number"]; ?></td>
			</tr>
		<?php 
	 }
	 ?>
	 
		</table>
		
		</div>
		
		
