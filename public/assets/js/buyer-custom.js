$(document).ready(function() {
	//delete product
	$(".deleteProduct").click(function(){
		var confirmation =confirm("Are you sure you want to Delete this Product?");
        if (confirmation==true){
			var id = $(this).data("id");
			var site_url = $(this).data("site_url");
			$.ajax(
			{
				url: site_url+"/buyer/product/"+id,
				type: 'get', 
				data: {
					"id": id
				},
				success: function (response){
					if(response == 1){
                         $('#responce_msg').html('<p style="color: green;">Product is deleted successfully</p>');
                         setTimeout(function () {
                            window.location.href = "";
                        }, 2000);  
                    }
                    else if(response == 0) {
						$('#responce_msg').html('<p style="color: red;">Oops Somethiong Is Wrong!</p>');
                        setTimeout(function () {
                            window.location.href = "";
                        }, 2000);
                    }
				}
			});
		} else {
            alert("pressed Cancel!");
            return false;
        }
	});
	
	//remove product from cart page
	$(".remove_from_cart").click(function (e) {
        e.preventDefault();
        var product_id = $(this).attr("data-product_id");
        var site_url = $(this).data("site_url");
        if(confirm("Are you sure you want to Remove this item from cart?")) {
            $.ajax({
                url: site_url+"/buyer/remove-from-cart/"+product_id,
                method: "GET",
                data: {
					"product_id": product_id
				},
                success: function (response) {
                	window.location.reload();
                }
            });
        }
    });
});