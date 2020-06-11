<?php
defined('productvv') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
//date_default_timezone_set('Africa/Lagos');
$error_message = '';
session_start();
?>
<?php
    $prdct = new model();

    $authID = $prdct->authId('products', $id);
    //fetch product data
    $data = $prdct->productById($authID);
       
    foreach ($data as $key) {
        // fetch product Variables... 
        
        $productId		= $key['id'];
        $name		 	= $key['name'];
        $image 			= $key['img_key'];
        $owner 			= $key['owner'];
        $description 	= $key['description'];
        $phone       	= $key['phone'];
        $price 			= $key['price'];
        $location 		= $key['location'];
        $keyy           = $key['img_key'];

        $Img = $prdct->productPic($keyy);
        $Img2 = $prdct->productPic($keyy);

        $Comment = $prdct->viewComment($productId);

        $coutTable = $prdct->coutTables('comments', $productId);
        //$getUserName = $prdct->getUserName()
        if (isset($_POST['comment_btn'])) {
            $Commentarray = array(
                'user_id' 	    => 	$_SESSION['farmkonectuser']['id'],
                'productId'     => 	$productId,
                'msg' 	        => 	escape($_POST['MSGG'])
            );
            $CommentInst = $prdct->InsertData('comments', $Commentarray);
            if (!$CommentInst) {
                $error_message = " check your input ";
            }else{
                $error_message = " Thanks you for the review..";
            }
        }

?>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
                <div class="col-xs-8 col-sm-10 col-md-8">
                    <div class="row row-tb-20">
                        <div class="col-xs-12 col-md-12 col-sm-8">
                            <div class="deal-deatails panel">
                                <div class="deal-slider">
                                    <div id="product_slider" class="flexslider">
                                        <ul class="slides">
                                        <?php foreach ($Img as $Ig) { $productImage = $Ig['img_Url']; ?>
                                            <li>
                                                <img style="weight: 100%; height: 300px;" alt="" src="<?php echo FARMWEB_URL; ?>inc/ufl/<?php echo $productImage;?>">
                                            </li>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                    <div id="product_slider_nav" class="flexslider flexslider-nav">
                                        <ul class="slides">
                                        <?php foreach ($Img2 as $Igm) { $productImage2 = $Igm['img_Url']; ?>
                                            <li>
                                                <img style="weight: 100%; height: 100px;;" alt="" src="<?php echo FARMWEB_URL; ?>inc/ufl/<?php echo $productImage2;?>">
                                            </li>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="deal-body p-20">
                                    <h3 class="mb-10"><?php echo $name; ?>.</h3>
                                    <div class="rating mb-10">
                                        <span class="rating-stars" data-rating="3">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div>
                                    <h2 class="price mb-15"><?php echo $price; ?></h2>
                                    <p class="mb-15"><?php echo $description; ?></p>
                                </div>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirm-order">Order Now</a>  
                            </div>
                        </div>
                     
                        <div class="col-xs-12">
                            <div class="posted-review panel p-30">
                                <h3 class="h-title"><?php echo $coutTable; ?> Comment</h3>

                                <?php 
                                foreach ($Comment as $Cmnt) { 
                                    $USerId     = $Cmnt['user_id']; 
                                    $MSG        = $Cmnt['msg']; 
                                    $DateComment = $Cmnt['created_at']; 

                                    $getUserName = $prdct->getUserName($USerId)
                                    
                                ?>
                                <div class="review-single pt-30">
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object mr-10 radius-4" src="<?php echo FARMWEB_URL; ?>inc/img/default.png" width="90" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="review-wrapper clearfix">
                                                <ul class="list-inline">
                                                    <li>
                                                    <?php foreach ($getUserName as $CommentUser) { 
                                                        $name = $CommentUser['first_name']." ".$CommentUser['last_name'];?>
                                                        <span class="review-holder-name h5"><?php echo $name;?></span>
                                                    <?php } ?>
                                                    </li>
                                                </ul>
                                                <p class="review-date mb-5"><?php echo $DateComment;?></p>
                                                <p class="copy"><?php echo $MSG;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="col-xs-12 col-md-12">
                            <div class="post-review panel p-20">
                                <h3 class="h-title">Comment Review</h3>
                                <div style="color: red;">
                                    <?php echo $error_message; ?>
                                </div>
                                <form class="horizontal-form pt-30" method="post" action="#">
                                    <div class="row row-v-10">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <textarea name="MSGG" class="form-control" placeholder="Your Review" rows="6"></textarea>
                                        </div><br>
                                        <div class="col-sm-12">
                                            <button type="submit" name="comment_btn" class="btn mt-20">Submit review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            <div class="col-2"></div>
        </div>
    </div>



<div class="modal fade" id="confirm-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Are you sure you want to order for this product?</h4>
            </div>
            <div class="modal-body">
                <p>Thanks for checking out this product.. :)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Continue Checking product</button>
                <a class="btn btn-danger btn-ok">Take me to cart</a>
            </div>
        </div>
    </div>
</div>