$(document).ready(function () {
    
    $(document).on('click','.increment-button', function (e) { 
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value =parseInt(qty,10);
        value = isNaN(value) ? 0 :value;
        if(value < 10)
        {
            value++;
        ;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
        
    }); 
    
    $(document).on('click','.decrement-button', function (e) { 
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value =parseInt(qty,10);
        value = isNaN(value) ? 0 :value;
        if(value > 1)
        {
            value--;
        
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
        
    });



    $(document).on('click','.addtocartbtn', function (e)
    { 
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();
        
        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: 
            {
                "prod_id" : prod_id,
                "prod_qty" :qty,
                "scope" : "add"
            },
            success: function (response) 
            {
                if(response == 201) 
                {
                    alertify.success("product added to your cart");
                } 
                else if(response == "existing")
                {
                    alertify.success("product Already added to your cart");
                }
                else if(response == 401)
                {
                    alertify.success("You have to login first");
                }
                else if(response == 500)
                {
                    alertify.success("Somethig went wrong !");
                }     
            }
        });
        
    });


    $(document).on('click','.updateQty', function () {
        
        var qty = $(this).closest('.product_data').find('.input-qty').val();
    
        var prod_id = $(this).closest('.product_data').find('.prodId').val();
        
        
        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: 
            {
                "prod_id" : prod_id,
                "prod_qty" :qty,
                "scope" : "update"
            },
            success: function (response)
            {
                // alert(response);
                $('#mycart').load(location.href + " #mycart");
            }
        });
    });

    $(document).on('click','.deleteItem', function () {
       
        var cart_id = $(this).val();
        // alert (cart_id);

        $.ajax({
            type: "POST",
            url: "functions/handlecart.php",
            data: 
            {
                "cart_id": cart_id,
                "scope" : "delete"
            },
            
            success: function (response)
            {
                if(response == 200) 
                {
                    alertify.success("product Deleted From your cart");
                    $('#mycart').load(location.href + " #mycart");
                }  
                else
                {
                    alertify.success(response);
                
                }  
            }
        });

    });
        
});