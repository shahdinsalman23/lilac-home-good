        <!-- Header -->
        <?php include 'include/header.php'; ?>



        <section class="product-area shop section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="sidebar-expander"></div>
                        <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category" id="sidebar-category">
                                <h3 class="title">Categories</h3>

                            </div>
                            <!--/ End Single Widget -->

                            <!-- Shop By Price -->
                            <div class="single-widget range">
                                <h3 class="title">Shop by Price</h3>
                                <div class="price-filter">
                                    <div class="price-filter-inner">
                                        <div id="slider-range" data-min="0" data-max="0.00" data-value="0.00"
                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div><span
                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                tabindex="0"></span><span
                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                tabindex="0"></span>
                                        </div>

                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <input type="text" id="amount" class="text-center" name="price"
                                                    placeholder="Add Your Price">
                                                <input type="hidden" id="start_price" value="0" class="filter">
                                                <input type="hidden" id="end_price" value="0.00" class="filter">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-block py-2 mt-2"
                                        id="filter_by_price">Filter</button>
                                </div>

                            </div>
                            <!--/ End Shop By Price -->

                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Brands</h3>
                                <ul class="categor-list">
                                </ul>
                            </div>
                            <!--/ End Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Tags</h3>
                                <ul class="categor-list">
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Shop Top -->
                                <div class="shop-top">
                                    <div class="shop-shorter">
                                        <div class="single-shorter">
                                            <label>Show :</label>
                                            <select id="length" class="filter">
                                                <option value="09">09</option>
                                                <option value="15">15</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <div class="single-shorter">
                                            <label>Sort By :</label>
                                            <select id="sort_by" class="filter">
                                                <option value="default">Default</option>
                                                <option value="oldest">Oldest</option>
                                                <option value="newest">Newest</option>
                                                <option value="low_to_high">Price: Low to High</option>
                                                <option value="high_to_low">Price: High to Low</option>
                                                <option value="a_to_z">Name: A-Z</option>
                                                <option value="z_to_a">Name: Z-A</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Shop Top -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a
                                            href="#">
                                            <img class="default-img"
                                                src="images/product-img-1.png"
                                                alt="">
                                            <span class="new">new</span>
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a href="#"
                                                    title="Quick View" class="quick-shop">
                                                    <i class="ri-eye-line"></i><span>Quick Shop</span>
                                                </a>

                                                <a title="Wishlist" class="btn-wishlist"
                                                    href="#"><i class="ri-heart-line"></i><span>Add to Wishlist</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Add to cart" class="add_to_cart" data-type="simple_product"
                                                    href="#">Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-content">
                                        <h3><a
                                                href="#">Lorem Ipsum</a></h3>

                                        <div class="product-price">
                                            <span>$ 0.00</span>
                                        </div>

                                        <div class="product-rating">
                                            <ul class="reviews">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a
                                            href="#">
                                            <img class="default-img"
                                                src="images/product-img-2.png"
                                                alt="">
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a href="#"
                                                    title="Quick View" class="quick-shop">
                                                    <i class="ri-eye-line"></i><span>Quick Shop</span>
                                                </a>

                                                <a title="Wishlist" class="btn-wishlist"
                                                    href="#"><i class="ri-heart-line"></i><span>Add to Wishlist</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Add to cart" class="add_to_cart" data-type="simple_product"
                                                    href="#">Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-content">
                                        <h3><a
                                                href="#">Lorem Ipsum</a></h3>

                                        <div class="product-price">
                                            <span>$ 0.00</span>
                                        </div>

                                        <div class="product-rating">
                                            <ul class="reviews">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 ">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="default-img"
                                                src="images/product-img-3.png"
                                                alt="">
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a href="#"
                                                    title="Quick View" class="quick-shop">
                                                    <i class="ri-eye-line"></i><span>Quick Shop</span>
                                                </a>

                                                <a title="Wishlist" class="btn-wishlist"
                                                    href="#"><i class="ri-heart-line"></i><span>Add to Wishlist</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Add to cart" class="add_to_cart" data-type="simple_product"
                                                    href="">Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-content">
                                        <h3><a
                                                href="#">Lorem Ipsum</a></h3>

                                        <div class="product-price">
                                            <span>$ 0.00</span>
                                        </div>

                                        <div class="product-rating">
                                            <ul class="reviews">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Pagination-->
                            <div class="col-lg-12">
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <?php include 'include/footer.php'; ?>