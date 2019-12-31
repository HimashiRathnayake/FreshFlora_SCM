<?php

/**
* 
*/
class DBOperation
{
	
	private $con;

	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}


	public function addProduct($product_name,$product_type,$buying_price,$selling_price,$quantity,$size,$image,$added_date){
		$pre_stmt = $this->con->prepare("INSERT INTO product
			(product_name,buying_price,selling_price,quantity,size,image,type)
			 VALUES (?,?,?,?,?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("sddidss",$product_name,$buying_price,$selling_price,$quantity,$size,$image,$product_type);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "NEW_PRODUCT_ADDED";
			
		}else{
			return 0;
		}

	}

	public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}
}

//$opr = new DBOperation();
//echo $opr->addCategory(1,"Mobiles");
//echo "<pre>";
//print_r($opr->getAllRecord("categories"));
?>
