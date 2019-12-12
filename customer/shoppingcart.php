<?php
    session_start();
    require("forAll.php");
    $db=require_once("dbConfig.php");

    if (isset($_POST['add'])){
        if (isset($_SESSION['cart'])){
            $item_array_id= array_column($_SESSION['cart'], 'product_ID');
            if (in_array($_POST['product_ID'],$item_array_id)){
                echo '<script>alert("Product is already added to the cart");</script>';
            }
            else{
                $count=count($_SESSION['cart']);
                $item_array= array(
                    'product_ID' => $_POST['product_ID'],
                    'product_name'=> $_POST['product_name'],
                    'selling_price'=> $_POST['selling_price'],
                    'quantity'=> $_POST['quantity']);
                $_SESSION['cart'][$count]=$item_array;
            }
        }
        else{
            $item_array =array(
                'product_ID' => $_POST['product_ID'],
                'product_name'=> $_POST['product_name'],
                'selling_price'=> $_POST['selling_price'],
                'quantity'=> $_POST['quantity']);
            $_SESSION['cart'][0]=$item_array;
        }
    }else{

    }

    if (isset($_POST['change'])){
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['product_ID']==$_POST['product_ID']){
                unset($_SESSION['cart'][$key]);
                $count=count($_SESSION['cart']);
                $item_array= array(
                    'product_ID' => $_POST['product_ID'],
                    'product_name'=> $_POST['product_name'],
                    'selling_price'=> $_POST['selling_price'],
                    'quantity'=> $_POST['quantity']);
                $_SESSION['cart'][$count]=$item_array;
            }
        }

    }
    
    if (isset($_POST['update'])){
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['product_ID']==$_POST['id']){
                unset($_SESSION['cart'][$key]);
                $count=count($_SESSION['cart']);
                $item_array= array(
                    'product_ID' => $_POST['product_ID'],
                    'product_name'=> $_POST['product_name'],
                    'selling_price'=> $_POST['selling_price'],
                    'quantity'=> $_POST['quantity']);
                $_SESSION['cart'][$count]=$item_array;
            }
        }
    }
    if (isset($_GET['action'])){
        if ($_GET['action']=='delete'){
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['product_ID']==$_GET['id']){
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
        if ($_GET['action']=='empty'){
            unset($_SESSION['cart']);
        }
    }

     
?>
<div id="content" class="right">
        <h2>Shopping Cart</h2>
        <a href='shoppingcart.php?action=empty'>Empty Cart</a><br><br>
        <?php
            if (!empty($_SESSION['cart'])){
                $total=0;?>
		<table width="700" border="0" cellpadding="5" cellspacing="0">
          	<tr bgcolor="#395015">
                <th width="168" align="left">Item</th> 
                <th width="188" align="left">Description</th> 
                <th width="60" align="center">Quantity</th> 
                <th width="80" align="right">Price</th> 
                <th width="80" align="right">Total</th> 
                <th width="64">
                <th width="64"> </th>
          	</tr>
            
            <?php
                foreach ($_SESSION['cart'] as $value) {
                    $query1 = "SELECT * FROM product where product_ID='".$value['product_ID']."'";
                    $resultSet1 = mysqli_query($db, $query1);
                    $result = mysqli_fetch_assoc($resultSet1);
            ?>
            
            <form method="POST" action="shoppingcart.php">
                <tr bgcolor="#41581B">
                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($result['image']).'" alt="floral set 1" />';?></a></td> 
                    <td><?php echo $value['product_name'];?></td> 
                    <input name="id" type="hidden" value="<?php echo $value['product_ID'];?>">
                    <td align="center"><?php echo $value['quantity'];?></td> 
                    <!-- <td align="center"><input name="quantity" type="text" id="quantity" onblur="update()" value="<?php echo $value['quantity'];?>" size="6" maxlength="2" /> </td> -->
                    <td align="right"><?php echo $value['selling_price'];?></td> 
                    <td align="right"><?php echo $value['selling_price']*$value['quantity'] ;?></td>
                    <td align="center"> <?php echo '<a href="productdetail.php?product='.$value['product_ID'].'&action=edit">Edit</a>';?> </td>
                    <td align="center"> <?php echo '<a href="shoppingcart.php?action=delete&id='.$value['product_ID'].'">Remove</a>';?> </td>
                </tr>
                
                <?php
                    $total+=$value['selling_price']*$value['quantity'];
                    }
                    ?>
                <tr bgcolor="#41581B">
                    <!-- <td colspan="4">Have you modified item quantities? Please <a href="shoppingcart.php" name="update"><strong>Update</strong></a> the Cart.&nbsp;&nbsp;</td> -->
                    <td colspan="5" align="right"><h4>All Total:</h4></td>
                    <td align="right"><h4>Rs.<?php echo $total;?></h4></td>
                    <td> </td>
                </tr>
            </form>
        </table>
		<div class="cleaner h20"></div>
        <div class="right"><a href="checkout.html" class="button">Order</a></div>
        <div class="cleaner h20"></div>
            <?php
            }else{
            ?>
            <h5>Still there are no any items in the shopping cart</h5><br><br>
            
            <?php
            }
            ?>
        
            
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>    
    </div>
    <div class="cleaner"></div>

</body>
</html>