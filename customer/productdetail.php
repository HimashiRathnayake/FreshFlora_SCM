<?php
    require("forAll.php");

$product= $_GET['product'];
$db=require_once("dbConfig.php");
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
            <form method="post" action="shoppingcart.php">
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
                        <td><strong>In Stock</strong></td>
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
            <div class="cleaner h40"></div>
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>    
    </div>
 


    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	<div class="footer_left">
    	<a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a>
    </div>
	<div class="footer_right">
		<p><a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p>
        <p>Copyright © 2084 <a href="#">Company Name</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>