<div id="footer">
    <div class="container text-center">
        <div class="col-md-6">
            <p>&copy; 2020 FoodShala. All Rights Reserved.</p>
        </div>
        <div class="col-md-6">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.add_cart').click(function() {
        var product_id = $(this).data("productid");
        var product_name = $(this).data("productname");
        var product_price = $(this).data("productprice");
        var quantity = $('#' + product_id).val();
        $.ajax({
            url: "<?php echo site_url('Food_order/add_to_cart');?>",
            method: "POST",
            data: {
                product_id: product_id,
                product_name: product_name,
                product_price: product_price,
                quantity: quantity
            },
            success: function(data) {
                $('#detail_cart').html(data);
            }
        });
    });


    $('#detail_cart').load("<?php echo site_url('food_order/load_cart');?>");


    $(document).on('click', '.romove_cart', function() {
        var row_id = $(this).attr("id");
        $.ajax({
            url: "<?php echo site_url('food_order/delete_cart');?>",
            method: "POST",
            data: {
                row_id: row_id
            },
            success: function(data) {
                $('#detail_cart').html(data);
            }
        });
    });
});
</script>

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
</body>

</html>