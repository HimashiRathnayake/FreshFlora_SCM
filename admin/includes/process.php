<?php
include_once("../database/constants.php");

include_once("DBOperation.php");
include_once("manage.php");

//For Registration Processsing
//For Login Processing
//Add Product
if (isset($_POST["added_date"]) AND isset($_POST["product_name"])) {
	$obj = new DBOperation();
	$result = $obj->addProduct(
							$_POST["product_name"],
							$_POST["buying_price"],
							$_POST["selling_price"],
							$_POST["quantity"],
							$_POST["size"],
							$_POST["image"],
							$_POST["added_date"]);
							
	echo $result;
	exit();
}


//----------------Products---------------------

if (isset($_POST["manageProduct"])) {
	$m = new Manage();
	$result = $m->manageRecordWithPagination("product",$_POST["pageno"]);
	$rows = $result["rows"];
	$pagination = $result["pagination"];
	if (count($rows) > 0) {
		$n = (($_POST["pageno"] - 1) * 5)+1;
		foreach ($rows as $row) {
			?>
				<tr>
			        <td><?php echo $n; ?></td>
			        <td><?php echo $row["product_name"]; ?></td>
			        <td><?php echo $row["buying_price"]; ?></td>
			        <td><?php echo $row["selling_price"]; ?></td>
			        <td><?php echo $row["quantity"]; ?></td>
			        <td><?php echo $row["size"]; ?></td>
					<td><?php echo '<img src = "data:image/product/png;base64,'.base64_encode($row["image"]).'" width="40" hight="40"/>'; ?></td>
			        <td><?php echo $row["added_date"]; ?></td>
					
			        <td><a href="#" class="btn btn-success btn-sm">Active</a></td>
			        <td>
			        	<a href="#" did="<?php echo $row['product_ID']; ?>" class="btn btn-danger btn-sm del_product">Delete</a>
			        	<a href="#" eid="<?php echo $row['product_ID']; ?>" data-toggle="modal" data-target="#form_products" class="btn btn-info btn-sm edit_product">Edit</a>
			        </td>
			      </tr>
			<?php
			$n++;
		}
		?>
			<tr><td colspan="5"><?php echo $pagination; ?></td></tr>
		<?php
		exit();
	}
}

//Delete 
if (isset($_POST["deleteProduct"])) {
	$m = new Manage();
	$result = $m->deleteRecord("product","product_ID",$_POST["id"]);
	echo $result;
}

//Update Product
if (isset($_POST["updateProduct"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("product","product_ID",$_POST["id"]);
	echo json_encode($result);
	exit();
}

//Update Record after getting data
if (isset($_POST["update_product"])) {
	$m = new Manage();
	$id = $_POST["product_ID"];
	$name = $_POST["update_product"];	
	$selling_price = $_POST["selling_price"];
	$buying_price = $_POST["buying_price"];
	$quantity = $_POST["quantity"];
	$size = $_POST["size"];
	$image = $_POST["image"];
	$added_date = $_POST["added_date"];
	$result = $m->update_record("product",["product_ID"=>$id],["product_name"=>$name,"selling_price"=>$selling_price,"buying_price"=>$buying_price,"quantity"=>$quantity,"size"=>$size,"image"=>$image,"added_date"=>$added_date]);
	echo $result;
}

//Get price and qty of one item



?>