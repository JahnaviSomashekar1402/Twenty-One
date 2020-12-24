<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
    }

?>

<!--Cart-->
<section id="cart" class="py-3">
    <div class="mx-5">

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-7 col-md-12 col-lg-7">
                <h5 class="font-poppins font-s-20 border-bottom font-w-700 py-3 ">CART</h5>
                <?php
                foreach ($product->getData('cart')as $item):
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function($item){
                ?>
                <!-- cart item -->
                <div class="row border-bottom py-3 mt-3 ">
                    <div class="col-sm-2 mb-3">
                        <img src="<?php echo $item['item_image'] ?? ".assets/Products/1.webp"; ?>"
                            style="height: 120px;">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-poppins font-s-18"><?php echo $item['item_brand'] ?? "Unknown"; ?></h5>
                        <small class="font-poppins"
                            style="color: #898989;"><?php echo $item['item_name'] ?? "Unknown"; ?></small>

                        <!-- Quantity -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-poppins " style="width: 120px;">
                                <button class="qty_minus border bg-light" style="width: 120px;" data-id="pro1"><i
                                        class="fas fa-minus"></i></button>
                                <input type="text" data-id="pro1"
                                    class="qty_input text-center font-poppins font-w-800 border px-2 w-100 bg-light"
                                    disabled value="1" placeholder="1">
                                <button data-id="pro1" style="width: 120px;" class="qty_plus border bg-light"><i
                                        class="fas fa-plus"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit"
                                    class="btn font-poppins font-s-12 font-w-700 px-3 border-right">DELETE</button>
                            </form>
                            <button type="submit" class="btn font-poppins font-s-12 font-w-700"
                                style="padding:10px 0 10px 0 ;">WISHLIST</button>
                        </div>
                        <!-- !Quantity -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="text-center font-poppins font-s-18 font-w-600 mt-3">
                            ₹<span class="product_price"><?php echo $item['item_price'] ?? '0'; ?></span>
                        </div>
                    </div>
                </div>
                <!--!cart item-->
                <?php
                return $item['item_price'];
                    },$cart);
                    endforeach;
                    
                ?>

            </div>

            <!-- Subtotal Section-->
            <div class="col-sm-5 col-md-12 col-lg-5 mt-5">
                <div class="sub-total" style="border: 2px solid #dddddd;">
                    <h6 class="font-s-16 font-w-700 font-poppins color-primary py-3" style="margin-left: 25px;">
                        CART TOTALS</h6>
                    <div class="py-4">
                        <h5 class="font-poppins font-w-600 font-s-14"
                            style="margin-left: 25px;margin-right:25px;padding-bottom: 15px;border-bottom: 1px solid #dddddd;">
                            Subtotal<span style="color: #898989;"
                                class="font-poppins font-w-400 font-s-14">₹<?php echo isset($subTotal)? $Cart->getSum($subTotal): 0 ?></span>
                        </h5>
                        <p class="font-poppins font-s-20 font-w-700"
                            style="margin-left: 25px;margin-right:25px;padding-bottom: 15px;padding-right: 200px;">
                            Total<span
                                style="padding-left:25vw;">₹<?php echo isset($subTotal)? $Cart->getSum($subTotal): 0 ?></span>
                        </p>
                        <button type="submit" class="btn btn-add font-poppins font-s-15 font-w-700 mt-3"
                            style="margin:auto; display: block;width: 90%;">PROCEED
                            TO CHECKOUT&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <!-- !Subtotal Section-->
        </div>
        <!--  !Cart Items -->
    </div>
</section>
<!-- !Cart Section -->
</div>
</section>
<!--!Cart-->