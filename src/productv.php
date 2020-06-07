<?php
defined('productvv') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
//date_default_timezone_set('Africa/Lagos');
$error_message = '';
?>
<?php
    $prdct = new model();
        $authID = $prdct->authId('products', $id);
    //fetch product data
    $data = $prdct->productById($authID);
       
    foreach ($data as $key) {
        // fetch product Variables... 
        
        $name		 	= $key['name'];
        $image 			= $key['img_key'];
        $owner 			= $key['owner'];
        $description 	= $key['description'];
        $phone       	= $key['phone'];
        $price 			= $key['price'];
        $location 		= $key['location'];
        $status 		= $key['status'];

echo $description;
?>
 <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-7 col-md-8">
                            <div class="row row-tb-20">
                                <div class="col-xs-12">
                                    <div class="deal-deatails panel">
                                        <div class="deal-slider">
                                            <div id="product_slider" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/product_01.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/product_02.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/product_03.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/product_04.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/product_05.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/product_06.jpg">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="product_slider_nav" class="flexslider flexslider-nav">
                                                <ul class="slides">
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/thumb_01.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/thumb_02.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/thumb_03.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/thumb_04.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/thumb_05.jpg">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="wp_content/assets/images/products/thumb_06.jpg">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="deal-body p-20">
                                            <h3 class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo mollitia autem, animi fuga.</h3>
                                            <div class="rating mb-10">
                                                <span class="rating-stars" data-rating="3">
				                        <i class="fa fa-star-o"></i>
				                        <i class="fa fa-star-o"></i>
				                        <i class="fa fa-star-o"></i>
				                        <i class="fa fa-star-o"></i>
				                        <i class="fa fa-star-o"></i>
				                    </span>
                                            </div>
                                            <h2 class="price mb-15">$60.00</h2>
                                            <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, ipsum voluptatum. Eos, saepe harum culpa consequatur aut tenetur, earum, illum eum iste aliquam quam quisquam atque numquam magni voluptas deserunt!</p>
                                            <p class="mb-15">Adipisicing elit. Laboriosam, ipsum voluptatum. Eos, saepe harum culpa consequatur aut tenetur, earum, illum eum iste aliquam quam quisquam atque numquam magni voluptas deserunt!</p>
                                            <p class="mb-20">Laboriosam, ipsum voluptatum. Eos, saepe harum culpa consequatur aut tenetur, earum, illum eum iste aliquam quam quisquam atque numquam magni voluptas deserunt!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="posted-review panel p-30">
                                        <h3 class="h-title">16 Review</h3>
                                        <div class="review-single pt-30">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object mr-10 radius-4" src="wp_content/assets/images/avatars/avatar_01.jpg" width="90" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-wrapper clearfix">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <span class="review-holder-name h5">John Doe</span>
                                                            </li>
                                                            <li>
                                                                <div class="rating">
                                                                    <span class="rating-stars" data-rating="5">
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="review-date mb-5">September 9, 2016</p>
                                                        <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single pt-30">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object mr-10 radius-4" src="wp_content/assets/images/avatars/avatar_02.jpg" width="90" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-wrapper clearfix">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <span class="review-holder-name h5">John Doe</span>
                                                            </li>
                                                            <li>
                                                                <div class="rating">
                                                                    <span class="rating-stars" data-rating="2">
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="review-date mb-5">September 9, 2016</p>
                                                        <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single pt-30">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object mr-10 radius-4" src="wp_content/assets/images/avatars/avatar_03.jpg" width="90" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-wrapper clearfix">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <span class="review-holder-name h5">John Doe</span>
                                                            </li>
                                                            <li>
                                                                <div class="rating">
                                                                    <span class="rating-stars" data-rating="3">
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="review-date mb-5">September 9, 2016</p>
                                                        <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single pt-30">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object mr-10 radius-4" src="wp_content/assets/images/avatars/avatar_04.jpg" width="90" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-wrapper clearfix">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <span class="review-holder-name h5">John Doe</span>
                                                            </li>
                                                            <li>
                                                                <div class="rating">
                                                                    <span class="rating-stars" data-rating="4">
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="review-date mb-5">September 9, 2016</p>
                                                        <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single pt-30">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object mr-10 radius-4" src="wp_content/assets/images/avatars/avatar_05.jpg" width="90" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-wrapper clearfix">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <span class="review-holder-name h5">John Doe</span>
                                                            </li>
                                                            <li>
                                                                <div class="rating">
                                                                    <span class="rating-stars" data-rating="5">
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                        <i class="fa fa-star-o"></i>
										                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="review-date mb-5">September 9, 2016</p>
                                                        <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="post-review panel p-20">
                                        <h3 class="h-title">Post Review</h3>
                                        <form class="horizontal-form pt-30" action="#">
                                            <div class="row row-v-10">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-xs-12">
                                                    <ul class="select-rate list-inline ptb-20">
                                                        <li><span>Your Rating : </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating" role="button">
			                                        <i class="fa fa-star"></i>
			                                    </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating" role="button">
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                    </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating" role="button">
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                    </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating" role="button">
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                    </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating" role="button">
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                        <i class="fa fa-star"></i>
			                                    </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-12">
                                                    <textarea class="form-control" placeholder="Your Review" rows="6"></textarea>
                                                </div>
                                                <div class="col-xs-12 text-right">
                                                    <button type="submit" class="btn mt-20">Submit review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    <div class="col-xs-12">
                                        <div class="widget single-deal-widget panel ptb-30 prl-20">
                                            <div class="widget-body text-center">
                                                <h2 class="mb-20 h3">
		  Wyndham Garden at Palmas del Mar - Puerto Rico
		</h2>
                                                <p class="color-muted">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit harum quidem eaque amet pariatur aspernatur mollitia ratione maxime.
                                                </p>
                                                <div class="price mb-20">
                                                    <h4 class="price"><span class="price-sale"> $200.00</span> $60.00</h4>
                                                </div>
												<div class="price-coupon">
													<h2 class="price"><span class="">Price: $1</span> </h2>
												</div>	<br>
												
                                                <div class="buy-now mb-40">
                                                    <a href="#" target="_blank" class="btn btn-block btn-lg">
                                                        <i class="fa fa-shopping-cart font-16 mr-10"></i> Buy now
                                                    </a>
														<ul class="deal-meta list-inline mb-10 color-mid">
															<br>
															<li><i class="ico fa fa-shopping-basket mr-10"></i>75 Bought</li>
														</ul>
                                                </div>
												
                                                <div class="time-left mb-30">
                                                    <p class="t-uppercase color-muted">
                                                        Hurry up Only a few deals left
                                                    </p>
                                                    <div class="color-mid font-14 font-lg-16">
        	<i class="ico fa fa-clock-o mr-10"></i>
        	<span data-countdown="2020/10/10 12:25:10"></span>
	      </div>
                                                </div>
                                                <ul class="list-inline social-icons social-icons--colored t-center">
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
									
									<!-- Recent Posts -->
                                       <!-- <div class="widget about-seller-widget panel ptb-30 prl-20">
                                            <h3 class="widget-title h-title">About Seller</h3>
                                            <div class="widget-body t-center">
                                                <figure class="mt-20 pb-10">
                                                    <img src="assets/images/brands/store_logo.jpg" alt="">
                                                </figure>
                                                <div class="store-about mb-20">
                                                    <h3 class="mb-10">Amazon Store</h3>
                                                    <div class="rating mb-10">
                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                    		<i class="fa fa-star-o"></i>
                                                    		<i class="fa fa-star-o"></i>
                                                    		<i class="fa fa-star-o star-active"></i>
                                                    		<i class="fa fa-star-o"></i>
                                                    		<i class="fa fa-star-o"></i>
                                                    	</span>
                                                        <span class="rating-reviews">
            		                                      ( <span class="rating-count">205</span> rates )
                                                        </span>
                                                    </div>
                                                    <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis at accusantium ducimus excepturi cumque ad commodi libero nihil rem voluptatibus veniam ipsa ullam esse quia quae fuga, quidem iusto.</p>
                                                    <button class="btn btn-info">FOLLOW</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Recent Posts -->
                                    </div>
									<div class="col-xs-12">
                                        <!-- For buyer -->
                                        <div class="widget subscribe-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Utile links!</h3>
                                            <div class="widget-content ptb-30">
                                                 <ul>
                                                <li><h6><a href="faq.html">1.Frequently Asked Questions</a></h6>
                                                </li>
                                                <li><h6><a href="terms_conditions">2.Terms &amp; Conditions</a></h6>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                        <!-- End for buyer -->
                                    </di
                                    <div class="col-xs-12">
                                        <!-- Subscribe Widget -->
                                        <div class="widget subscribe-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Subscribe to mail</h3>
                                            <div class="widget-content ptb-30">

                                                <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                                <form method="post" action="#">
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" placeholder="Your Email Address" required="required">
                                                        <span class="input-group-btn">
                                        		        	<button class="btn" type="submit">Sign Up</button>
                                        		    	</span>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- End Subscribe Widget -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Latest Deals Widegt -->
                                        <div class="widget latest-deals-widget panel prl-20">
                                            <div class="widget-body ptb-20">
                                                <div class="owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">
                                                    <div class="latest-deals__item item">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="wp_content/assets/images/deals/deal_02.jpg">
                                                            <div class="label-discount top-10 right-10">-30%</div>
                                                            <ul class="deal-actions top-10 left-10">
                                                                <li class="like-deal">
                                                                    <span>
		                        <i class="fa fa-heart"></i>
		                    </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                    <span>
		                        <i class="fa fa-camera"></i>
		                    </span>
                                                                </li>
                                                            </ul>
                                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                                <div class="rating mb-10">
                                                                    <span class="rating-stars rate-allow" data-rating="4">
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                    </span>
                                                                    <span class="rating-reviews color-lighter">
		                    	(<span class="rating-count">160</span> Reviews)
                                                                    </span>
                                                                </div>
                                                                <h5 class="deal-title mb-10">
		                    <a href="deal_single.html" class="color-lighter">Hampton Bay LED Light Ceiling Exhaust Fan</a>
		                </h5>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    <div class="latest-deals__item item">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="wp_content/assets/images/deals/deal_03.jpg">
                                                            <div class="label-discount top-10 right-10">-15%</div>
                                                            <ul class="deal-actions top-10 left-10">
                                                                <li class="like-deal">
                                                                    <span>
		                        <i class="fa fa-heart"></i>
		                    </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                    <span>
		                        <i class="fa fa-camera"></i>
		                    </span>
                                                                </li>
                                                            </ul>
                                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                                <div class="rating mb-10">
                                                                    <span class="rating-stars rate-allow" data-rating="2">
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                    </span>
                                                                    <span class="rating-reviews color-lighter">
		                    	(<span class="rating-count">100</span> Reviews)
                                                                    </span>
                                                                </div>
                                                                <h5 class="deal-title mb-10">
		                    <a href="deal_single.html" class="color-lighter">Timberland Men's Thorton Waterproof Boots</a>
		                </h5>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    <div class="latest-deals__item item">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="wp_content/assets/images/deals/deal_04.jpg">
                                                            <div class="label-discount top-10 right-10">-60%</div>
                                                            <ul class="deal-actions top-10 left-10">
                                                                <li class="like-deal">
                                                                    <span>
		                        <i class="fa fa-heart"></i>
		                    </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                    <span>
		                        <i class="fa fa-camera"></i>
		                    </span>
                                                                </li>
                                                            </ul>
                                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                                <div class="rating mb-10">
                                                                    <span class="rating-stars rate-allow" data-rating="3">
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                    </span>
                                                                    <span class="rating-reviews color-lighter">
		                    	(<span class="rating-count">32</span> Reviews)
                                                                    </span>
                                                                </div>
                                                                <h5 class="deal-title mb-10">
		                    <a href="deal_single.html" class="color-lighter">New and Refurbished Lenovo Laptops</a>
		                </h5>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    <div class="latest-deals__item item">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="wp_content/assets/images/deals/deal_05.jpg">
                                                            <div class="label-discount top-10 right-10">-60%</div>
                                                            <ul class="deal-actions top-10 left-10">
                                                                <li class="like-deal">
                                                                    <span>
		                        <i class="fa fa-heart"></i>
		                    </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                    <span>
		                        <i class="fa fa-camera"></i>
		                    </span>
                                                                </li>
                                                            </ul>
                                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                                <div class="rating mb-10">
                                                                    <span class="rating-stars rate-allow" data-rating="5">
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                    </span>
                                                                    <span class="rating-reviews color-lighter">
		                    	(<span class="rating-count">29</span> Reviews)
                                                                    </span>
                                                                </div>
                                                                <h5 class="deal-title mb-10">
		                    <a href="deal_single.html" class="color-lighter">Buying a TV Is Easy When You Know These Terms</a>
		                </h5>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Latest Deals Widegt -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Best Rated Deals -->
                                        <div class="widget best-rated-deals panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Best Rated Deals</h3>
                                            <div class="widget-body ptb-30">


                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="wp_content/assets/images/deals/thumb_01.jpg" alt="Thumb" width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                    <a href="#">Aenean ut orci vel massa</a>
                </h6>
                                                        <div class="mb-5">
                                                            <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                            </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>


                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="wp_content/assets/images/deals/thumb_02.jpg" alt="Thumb" width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                    <a href="#">Aenean ut orci vel massa</a>
                </h6>
                                                        <div class="mb-5">
                                                            <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                            </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>


                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="wp_content/assets/images/deals/thumb_03.jpg" alt="Thumb" width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                    <a href="#">Aenean ut orci vel massa</a>
                </h6>
                                                        <div class="mb-5">
                                                            <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                            </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>


                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="wp_content/assets/images/deals/thumb_04.jpg" alt="Thumb" width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                    <a href="#">Aenean ut orci vel massa</a>
                </h6>
                                                        <div class="mb-5">
                                                            <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                            </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- Best Rated Deals -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Contact Us Widget -->
                                        <div class="widget contact-us-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Got any questions?</h3>
                                            <div class="widget-body ptb-30">
                                                <p class="mb-20 color-mid">If you are having any questions, please feel free to ask.</p>
                                                <a href="contact_us_01.html" class="btn btn-block"><i class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                            </div>
                                        </div>
                                        <!-- End Contact Us Widget -->
                                    </div>
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Container -->


        </main>


<?php } ?>