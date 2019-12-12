<?php 
require("includes/header.php");
require("includes/sidebar.php");

$db=require_once("includes/dbConfig.php");
if (isset($_GET['type'])){
    $query1 = "SELECT * FROM product where product_type='".$_GET['type']."'";
    $resultSet1 = mysqli_query($db, $query1);
}
else{
    $query1 = "SELECT * FROM product";
    $resultSet1 = mysqli_query($db, $query1);
}
?>

<div id="content" class="right">
		<h2>Products</h2>
        <p>Cras aliquam, mi nec imperdiet volutpat, ligula est consequat odio, eu auctor urna augue eu quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum nec nunc ac hendrerit. Morbi lacinia placerat diam sit amet fringilla. Integer accumsan suscipit suscipit. Mauris non nunc sit amet turpis pharetra mattis. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        
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

