<?php 
require("includes/header.php");
require("includes/sidebar.php");

$db=require_once("includes/dbConfig.php");
if (isset($_GET['type'])){
    $query1 = "SELECT * FROM product where type='".$_GET['type']."'";
    $resultSet1 = mysqli_query($db, $query1);
    echo "<div id='content' class='right'>
		<h2>".$_GET['type']."</h2>
        <p>Order fresh,beautiful ".$_GET['type']." with fresh flora. We have various kinds of ".$_GET['type']." for you. Order today to get an awesom experience with us. We deliver fresh flowers islandwide and free delivery within seven days. (Try to place the order at least seven days prior to the date you want us to deliver.)</p>";
        
}
elseif (isset($_POST['Search'])){
    $query1 = "SELECT * FROM product where product_name Like '%".$_POST['keyword']."%'";
    $resultSet1 = mysqli_query($db, $query1);
    echo "<div id='content' class='right'><h2>Search Results</h2>";
     
}
else{
    $query1 = "SELECT * FROM product";
    $resultSet1 = mysqli_query($db, $query1); 
    echo "<div id='content' class='right'>
		<h2>Products</h2>
        <p>Order fresh,beautiful flowers with fresh flora. We have various kinds of flowers for you. Order today to get an awesom experience with us. We deliver fresh flowers islandwide and free delivery within seven days. (Try to place the order at least seven days prior to the date you want us to deliver.)</p>";
        
}?>


        <?php foreach ($resultSet1 as $value) {
        ?>
        <div class="product_box">
            <?php echo '<a href="productdetail.php?product='.$value['product_ID'].'"><img src="data:image/jpeg;base64,'.base64_encode($value['image']).'" alt="floral set 1" />';?></a>
      		<h3><?php echo $value['product_name']?></h3>
            <p class="product_price">Rs. <?php echo $value['selling_price']?></p>
            <p class="view_product">
                <?php echo '<a href="productdetail.php?product='.$value['product_ID'].'">View</a>';?>
            </p>
        </div>     
        <?php } ?>   	
        
        <!-- <div class="blank_box">
        	<a href="#" class="button left">Previous</a> 
            <a href="#" class="button right">Next Page</a>
        </div> -->

<?php require('includes/footer.php');?>

