<?php
require("includes/header.php");
require("includes/sidebar.php");

$product= $_GET['product'];
$db=require_once("includes/dbConfig.php");
$query1 = "SELECT * FROM product where product_ID='".$product."'";
$resultSet1 = mysqli_query($db, $query1);
$result = mysqli_fetch_assoc($resultSet1);
?>

<div id="content" class="right">
          <h2>Product Details : </h2>
          <h3>Product Name: <?php echo $result['product_name'];?></h3>
        <div class="content_half left">
        	<?php echo '<a  rel="lightbox" href="my images/flower/'.$result['product_name'].'.jpg"><img src="data:image/jpeg;base64,'.base64_encode($result['image']).'" alt="floral set 1" />';?></a>
        </div>
            <div class="content_half right">
            <form method="post" action="freshFloraProjectlogin/freshfloraUserLogin.php">
                <table>
                    <tr>
                        <td width="130">Price:</td>
                        <td width="84">Rs: <?php echo $result['selling_price'];?></td>
                    </tr>
                    <tr>
                        <td>
                        <?php 
                        if ($result['quantity']>0){
                            echo "In Stock";
                        }
                        else{
                            echo "Not in stock";
                        }?></td>
                        <td><strong>In Stock(<?php echo $result['quantity']?>)</strong></td>
                    </tr>
                    <tr><td>Quantity</td><td><input name="quantity" type="text" value="1" size="6" maxlength="2" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                    <input type="hidden" name="product_ID" value="<?php echo $result['product_ID']; ?>"> 
                    <input type="hidden" name="product_name" value="<?php echo $result['product_name']; ?>"> 
                    <input type="hidden" name="selling_price" value="<?php echo $result['selling_price']; ?>"> 
                    <?php if ((isset($_GET['action'])) && ($_GET['action']=='edit')){
                        echo '<input type="submit" name="change" value="Change"><br>
                        <a href="shoppingcart.php?action=delete&id='.$result['product_ID'].'">Remove item</a>';
                    }else{
                        echo '<input type="submit" name="add" value="Add to Cart">';
                    }?>
                </form>
			    </div>
            <div class="cleaner h40"></div>
            
            <h4>Product Description</h4>
            <p>Sed ullamcorper nunc at magna egestas fermentum. Etiam turpis orci, condimentum luctus orci id, elementum vulputate nunc. Donec diam turpis, iaculis vitae feugiat ac, molestie at odio. Nullam tincidunt est ac sagittis ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>


<?php require("includes/footer.php");
?>