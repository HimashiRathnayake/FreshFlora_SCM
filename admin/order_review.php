

<?php  
 $connect = mysqli_connect("localhost", "root", "", "scm_db");  
 $query = "SELECT product_name, sum(quantity_ordered) as number FROM order_details, product where product.product_ID = order_details.product_ID GROUP BY order_details.product_ID order by number DESC";  
 $mpp = "SELECT most_popular_product";
 $result = mysqli_query($connect, $query); 
 $res = mysqli_query($connect, $mpp); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>order reviews</title> 
		   <link href="style.css" rel="stylesheet" type="text/css">
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['product_ID', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["product_name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of ordered products',
                      //background: url(frame7.jpg) no-repeat center center fixed, 
                      backgroundColor: '#f5f5f0',
                      is3D:true,  
                      pieHole: 0  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
		   
		   
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:1000px;">  
                <h1 style = color :"pink; align="center" >Summary of orders by products</h1>
                <h4> Most ordered product : <?php echo $res;?></h5>   
                <br />  
                <div id="piechart" style="width: 800px; height: 750px;"></div>  
           </div> 

		   
      </body>  
 </html>  