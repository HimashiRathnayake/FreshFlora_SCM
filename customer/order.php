<?php 

session_start();
require ('includes/header.php');
require ('includes/sidebar.php');

if (isset($_SESSION['cart'])){
    $total=0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $total+=$value['selling_price'];
    }
?>
<div id="content" class="right">
    	<h2>Order Details</h2>
        <form method='post' action='order_handler.php'>
            <h5>Enter Your Payment Method</h5><br>
            
            <select name="payment_method">
                <option value="Cash">Cash</option>
                <option value="Credit card">Credit Card</option>
            </select>
                
                <div class="cleaner h40"></div>
                
                
                <h3>Total Amount is: <strong>Rs. <?php echo $total;?></strong></h3>
                <p><input name="terms" type="checkbox" id="terms" />
                I have read and accept the <a href="#">Terms of Use</a>. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                <button>Place the Order</button><br><br>

        </form>
            <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal" align="middle" /></a>&nbsp;(recommended if you have a PayPal account. Fastest way to complete your order.)</p>
            <p><a href="#"><img src="images/flagship.jpg" alt="Flagship" align="middle" /></a>&nbsp;(free shipping for orders above Rs.5000/=)</p>
<?php }elseif(isset($_GET['status'])){
    if($_GET['status']=='success'){
        echo "<h3>&nbsp&nbsp&nbsp Order has placed successfully.</h3>";
    }
}
else{
    echo "<h3>&nbsp&nbsp&nbsp You haven't add any products to the cart.</h3>";
}?>

<?php
require("includes/footer.php");
?>