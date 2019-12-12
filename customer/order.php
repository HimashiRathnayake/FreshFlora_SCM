<?php 
require ('includes/header.php');
require ('includes/sidebar.php');
?>

<div id="content" class="right">
    	<h2>Checkout</h2>
        
		<h3>BILLING DETAILS</h3>
        
            <div class="content_half left form_field">
				Full Name (must be the same as on credit card)
                <input name="fullname" type="text" id="fullname" maxlength="40" />
                Address:
      			<input name="address" type="text" id="address" maxlength="40" />
                City:
                <input name="city" type="text" id="city" maxlength="40" />
                Country:
                <input name="country" type="text" id="country" maxlength="40" />
            </div>
            
            <div class="content_half right form_field">
            	Email:
			  <input name="email" type="text" id="email" maxlength="40" />
                Phone:<br />
                <input name="phone" type="text" id="phone" maxlength="40" />
                <span>Please, specify your reachable phone number to call you for a verification.</span>
            </div>
            
            <div class="cleaner h40"></div>
            
            <h3>SHOPPING CARD</h3>
            <h4>TOTAL: <strong>$560</strong></h4>
			<p><input name="terms" type="checkbox" id="terms" />
		    I have read and accept the <a href="#">Terms of Use</a>. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal" align="middle" /></a>&nbsp;(recommended if you have a PayPal account. Fastest way to complete your order.)</p>
            <p><a href="#"><img src="images/flagship.jpg" alt="Flagship" align="middle" /></a>&nbsp;(free shipping for orders above $500)</p>

<?php
require("includes/footer.php");
?>