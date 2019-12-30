<?php
session_start();
if (!isset($_SESSION['uid'])){
    header('Location:http://localhost/FreshFlora_SCM/codes/index.html');
}

?>
<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Floral HTML CSS Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/styleforall.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 


</head>

<body>

<div id="templatemo_wrapper_h">
<div id="templatemo_header_wh">
	<div id="templatemo_header" class="header_home">
    	<div id="site_title"><a href="#">Fresh flora online Floral Shop</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="shoppingcart.php">Cart</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="#">LoggedIn</a>
                    <ul> 
						<li><a href = "logout.php">Logout</a></li>
                    </ul>
                </li>
                
            </ul>
            <div id="templatemo_search">
                <form action="#" method="get">
                  	<input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  	<input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->

        <div class="slider-wrapper theme-orman">
            
            <div id="slider" class="nivoSlider">
                <img src="images/sliding/s1.jpg" alt="slider image 1" />
                <a href="#">
                	<img src="images/sliding/s2.jpg" alt="slider image 2" title="Add some elegant colours and fragrance to your memories" />
                </a>
                <img src="images/sliding/s3.jpg" alt="slider image 3" />
                <img src="images/sliding/s4.jpg" alt="slider image 4" title="#htmlcaption" />
                <img src="images/sliding/s5.jpg" alt="slider image 5" title="#htmlcaption" />
				<img src="images/sliding/s6.jpg" alt="slider image 6" title="#htmlcaption" />
				<img src="images/sliding/s7.jpg" alt="slider image 7" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <p>Add some elegant colours and fragrance to your memories</p>
            </div>
        </div> 
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:false
			});
        });
        </script>
    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
            <ul class="sidebar_list">
                    <li><a href="products.php?type=rose">Rose</a></li>
                        <li><a href="products.php?type=anthurium">Anthurium</a></li>
                        <li><a href="products.php?type=lily">Lily</a></li>
                        <li><a href="products.php?type=orchid">Orchid</a></li>
                        <li><a href="products.php?type=carnation">Carnation</a></li>
                    </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h1>Contact us</h1>   
			<div class="cleaner h20"></div>
			<div class="col col13">
        	<h6><strong>Head Office</strong></h6>
            No,21, <br />
            Peradeniya Road,<br />
            Kandy<br /><br />
            
			<strong>Phone:</strong> 010-440-5500<br />
            <strong>Email:</strong> <a href="mailto:contact@company.com">freshfloara@company.com</a> <br />
                
                
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
		<h2>Welcome to Fresh Flora</h2>
		<p>Celebrate your special moments with Fresh Flora. High quality flowers with low prices! </p>
        
        <div class="product_box">
            <a href="products.php?type=rose"><img src="my images/rose_home1.jpg" alt="floral set 1" /></a>
      		<h3>Roses</h3>
        </div> 
       	
        <div class="product_box">
            <a href="products.php?type=anthurium"><img src="my images/anth_home1.jpg" alt="flowers 2" /></a>
            <h3>Anthuriums</h3>
        </div>
		
        <div class="product_box">
            <a href="products.php?type=lily"><img src="my images/lily_home1.jpg" alt="floral 3" /></a>
            <h3>Lilies</h3>
        </div>
      	
        <div class="product_box no_margin_right">
            <a href="products.php?type=orchid"><img src="my images/orch_home3.jpg" alt="flowers 4" /></a>
            <h3>Orchids</h3>
            
        </div>
        
        <div class="product_box">
            <a href="products.php?type=carnation"><img src="my images/car_home1.jpg" alt="floral set 5" /></a>
            <h3>Carnations</h3>
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
		<p><a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></p>
        <p>Copyright © 2084 <a href="#">four coders</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>