<?php 
require ('includes/header.php');
require ('includes/sidebar.php');
?>
    <div id="content" class="right">
    	<h2>Order Details</h2>
        
		<h5>Enter Your Payment Method</h5><br>
        
        <select name="payment_method">
            <option value="Cash">Cash</option>
            <option value="CreditCard">Credit Card</option>
        </select>
            
            <div class="cleaner h40"></div>
            
            
            <h4>Total Amount is: <strong>$560</strong></h4>
			<p><input name="terms" type="checkbox" id="terms" />
		    I have read and accept the <a href="#">Terms of Use</a>. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal" align="middle" /></a>&nbsp;(recommended if you have a PayPal account. Fastest way to complete your order.)</p>
            <p><a href="#"><img src="images/flagship.jpg" alt="Flagship" align="middle" /></a>&nbsp;(free shipping for orders above Rs.5000/=)</p>

<?php
require("includes/footer.php");
?>