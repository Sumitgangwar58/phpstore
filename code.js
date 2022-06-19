$(document).ready(function(){
    $(".card-body").on('click',"#add_to_cart",function(){  
        $name = $("#product_name").html();
        $.ajax({
            type:'post',
            url:"user_server.php",
            data:{
                add_to_cart:$name
            },
            success:function(response){
                $('#cart_count_indicator').load('#cart_count_indicator');
            }
        });
    });
});