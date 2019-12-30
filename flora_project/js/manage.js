$(document).ready(function(){
	var DOMAIN = "http://localhost/flora_project";

	

	//---------------------Products-----------------
	manageProduct(1);
	function manageProduct(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageProduct:1,pageno:pn},
			success : function(data){
				$("#get_product").html(data);		
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageProduct(pn);
	})

	$("body").delegate(".del_product","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure ? You want to delete..!")) {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : {deleteProduct:1,id:did},
				success : function(data){
					if (data == "DELETED") {
						alert("Product is deleted");
						manageProduct(1);
					}else{
						alert(data);
					}
						
				}
			})
		}
	})

	//Update product
	$("body").delegate(".edit_product","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateProduct:1,id:eid},
			success : function(data){
				console.log(data);
				$("#product_ID").val(data["product_ID"]);
				$("#update_product").val(data["product_name"]);
				$("#buying_price").val(data["buying_price"]);
				$("#selling_price").val(data["selling_price"]);
				$("#quantity").val(data["quantity"]);
				$("#size").val(data["size"]);
				$("#image").val(data["image"]);
				$("#p_status").val(data["p_status"]);

			}
		})
	})

	//Update product
	$("#update_product_form").on("submit",function(){
		$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_product_form").serialize(),
				success : function(data){
					if (data == "UPDATED") {
						alert("Product Updated Successfully..!");
						window.location.href = "";
					}else{
						alert(data);
					}
				}
			})
	})


	
})