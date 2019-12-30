$(document).ready(function(){
	var DOMAIN = "http://localhost/flora_project";
	
	//add product
	$("#product_form").on("submit",function(){
		$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#product_form").serialize(),
				success : function(data){
					if (data == "NEW_PRODUCT_ADDED") {
						alert("New Product Added Successfully..!");
						$("#product_name").val("");
						$("#buying_price").val("");
						$("#selling_price").val("");
						$("#quantity").val("");
						$("#size").val("");
						$("#image").val("");
						$("#p_status").val("");

					}else{
						console.log(data);
						alert(data);
					}
						
				}
			})
	})



})
