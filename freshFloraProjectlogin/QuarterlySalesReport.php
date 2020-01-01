<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
		<h3 align="center" style="color: Black; padding-top: 2%">Fresh Flora Quarterly Sales Report</h3>
    </head>
    <body>
        
        <form  method="post">
			<input type="year"  id="year" name="year"  placeholder="Enter Year..." ><br><br>
            <select name="Category" id="Category" class="form-control dropdown-user"  required="true">
				<option value="" selected disabled>Select the quarter</option>
                <option > Q1</option>
				<option > Q2</option>
				<option > Q3</option>
				<option > Q4</option>
             </select>
            <input type="submit" name="submit" value="Show"><br><br>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $year=$_POST['year'];
    $Quarter=$_POST['Category'];
	
    if($Quarter=='Q1'){
		
      $fromMonth=1;
	  $toMonth=3;
	  
    }
    else if($Quarter=='Q2'){
		$fromMonth=4;
	  $toMonth=6;
      
    }
	else if($Quarter=='Q3'){
		$fromMonth=7;
	  $toMonth=9;
     
    }
    else{
		$fromMonth=10;
	  $toMonth=12;
      
    }
	
	$data="call orderDetails($year, $fromMonth, $toMonth )";
	$mysql_host='127.0.0.1:3307';
$mysql_user='root';
$mysql_password='test';
$mysql_database='olddb_scm';

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    $filter_Result = mysqli_query($con, $data);
	// $res= mysqli_fetch_array($filter_Result);
	// echo $res['order_ID'];
    // return $filter_Result;?>
	
<table>
                <tr>
                    <th>Product Name</th>
                     <th>Selling Price</th>
					 <th>Buying Price</th>
					 <th>Quantity</th>
                     <th>Profit</th>
					 
                </tr>


         

<?php
	$totalProfit=0;
    foreach ($filter_Result as $value) {
		$Id= $value['product_ID'];
		$quan= $value['sum(quantity_ordered)'];
		
        $productdata="call ProductDetail($Id)";
		
		$data="call orderDetails($year, $fromMonth, $toMonth )";
		
		$data="call orderDetails($year, $fromMonth, $toMonth )";
		$mysql_host='127.0.0.1:3307';
		$mysql_user='root';
		$mysql_password='test';
		$mysql_database='olddb_scm';

		$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		
		$product_Res=mysqli_query($con, $productdata);
		$row = mysqli_fetch_array($product_Res);
		echo "<tr><td>".$row['product_name']."</td>";
		echo "<td>".$row['selling_price']."</td>";
		echo "<td>".$row['buying_price']."</td>";
		echo "<td>".$quan."</td>";
		
		$profit="select get_profit($Id) as profit";
		
		$data="call orderDetails($year, $fromMonth, $toMonth )";
		$mysql_host='127.0.0.1:3307';
		$mysql_user='root';
		$mysql_password='test';
		$mysql_database='olddb_scm';

		$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		
		$profit_query=mysqli_query($con, $profit);
		$profitrow = mysqli_fetch_array($profit_query);
		$tot_profit= $profitrow['profit']* $quan;
		$totalProfit+=$tot_profit;
		
		echo "<td>".$tot_profit."</td></tr>";
		
		
		
	
   }
   
   ?>
      </table>
        <h5>Total Profit: <?php echo $totalProfit;?></h5>  
            
        </form>

   <?php
   
  }  
	

  
  
  ?>
          
    </body>
</html>