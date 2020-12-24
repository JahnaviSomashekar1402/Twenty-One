<!--Product detail-->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? ".assets/Products/1.webp"; ?>" class="img-fluid"
                    style="width: 500px;" />
            </div>
            <div class="col-sm-6 py-5">
                <h6 class="font-poppins font-s-30 font-w-700"> <?php echo $item['item_brand'] ?? "Unknown"; ?> </h6>
                <p class="font-poppins font-w-500 font-s-20" style="color:#898989;">
                    <?php echo $item['item_name'] ?? "Unknown"; ?></p>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12 ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-poppins font-size-14 " style="color: #6f6f6f;">8,556
                        ratings</a>
                </div>
                <hr>
                <div class="price">
                    <h5 class="font-poppins font-s-24 font-w-600">₹<?php echo $item['item_price'] ?? '0'; ?></h5>
                    <p class="font-poppins font-s-16 font-w-400" style="line-height: 27px;color: #777777;">Black
                        solid
                        jacket, has a hooded, 2 pockets, zip closure, long sleeves, straight hem, and polyester
                        lining.
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="size my-3">
                            <h6 class="font-poppins font-s-14 font-w-700">SIZE:</h6>
                            <div class="d-flex  justify-content-between">
                                <button id="size1"
                                    class="btn size-btn p-0 font-s-14 font-w-600 font-poppins border px-3 py-2">S</button>
                                <button id="size2"
                                    class="btn size-btn p-0 font-s-14 font-w-600 font-poppins border px-3 py-2">M</button>
                                <button id="size3"
                                    class="btn size-btn p-0 font-s-14 font-w-600 font-poppins border px-3 py-2">L</button>
                                <button id="size4"
                                    class="btn size-btn p-0 font-s-14 font-w-600 font-poppins border px-3 py-2">XL</button>
                            </div>
                        </div>

                    </div>

                </div>
                <hr>

                <div class="row row-cols py-2 font-s-14 font-poppins">
                    <!--Quantity-->
                    <div class="d-flex font-poppins " style="width:170px;">
                        <button class="qty_minus border bg-light p-2" style="width: 150px;" data-id="pro3"><i
                                class="fas fa-minus"></i></button>
                        <input type="text" data-id="pro1"
                            class="qty_input text-center font-poppins font-w-800 border p-2 w-100 bg-light" disabled
                            value="1" placeholder="1">
                        <button data-id="pro3" style="width: 150px;" class="qty_plus border bg-light p-2"><i
                                class="fas fa-plus"></i></button>
                    </div>
                    <!--!Quantity-->
                    <div class="col">
                        <button type="submit" class="btn btn-add"><b>ADD TO CART</b></button>
                    </div>
                </div>
            </div>
            <!--Product Description-->
            <div class="col-12 py-5">
                <h6 class="font-poppins font-s-14 font-w-700">PRODUCT DESCRIPTION</h6>
                <hr>
                <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">Black solid
                    jacket, has a mock collar, 2 pockets, zip closure, long sleeves, straight hem, and cotton.
                </p>

                <h6 class="font-poppins font-s-14 font-w-700">Size & Fit</h6>
                <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">The model (height
                    6') is wearing a size M</p>

                <h6 class="font-poppins font-s-14 font-w-700">Material & Care</h6>
                <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">Cotton
                    Machine-wash</p>

                <h6 class="font-poppins font-s-14 font-w-700"> Specifications</h6>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <h7 class="font-poppins font-s-14 font-w-600">Sleeve Length</h7>
                            <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">Long
                                Sleeves</p>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <h7 class="font-poppins font-s-14 font-w-600">Type</h7>
                            <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">
                                Bomber</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <h7 class="font-poppins font-s-14 font-w-600">Collar</h7>
                            <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">Mock
                                Collar</p>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <h7 class="font-poppins font-s-14 font-w-600">Pattern Type
                            </h7>
                            <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">Solid
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <h7 class="font-poppins font-s-14 font-w-600">Length</h7>
                            <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">
                                Regular</p>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <h7 class="font-poppins font-s-14 font-w-600">Lining Fabric</h7>
                            <p class="font-poppins font-s-14" style="line-height: 27px;color: #6f6f6f;">
                                Cotton</p>
                        </div>
                    </div>
                </div>
                <!--!Product Description-->
            </div>
            <!--!Product Description-->
        </div>
    </div>
</section>
<!--Product detail-->
<?php
        endif;
        endforeach;
?>