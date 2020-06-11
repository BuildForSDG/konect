<?php

defined('commennt') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
//session_start();
$error_message = '';
$productComment = new model();
$userId  = 	$_SESSION['farmkonectuser']['id'];
$Comment = $productComment->productCommentByUser($userId);
?>
<section class="content-header">
  <h1>Comment</h1>
</section>

<dic class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="posted-review panel p-30">
        <h3 class="h-title" align="center">Your Products Comment</h3>
          <?php 
          foreach ($Comment as $Cmnt) { 
              $USerId     = $Cmnt['user_id']; 
              $prodctId  = $Cmnt['productId'];
              $MSG        = $Cmnt['msg']; 
              $DateComment = $Cmnt['created_at']; 

              $getUserName = $productComment->getUserName($USerId);
              $getPrdctName = $productComment->getProductName($prodctId)
              
          ?>
          <div class="review-single pt-30">
            <div class="media">
              <div class="media-left">
                <img class="media-object mr-10 radius-4" src="<?php echo FARMWEB_URL; ?>inc/img/default.png" width="90" alt="">
              </div>
              <div class="media-body">
                <div class="review-wrapper clearfix">
                  <ul class="list-inline">
                  <hr>
                    <li>Comment by: 
                    <?php foreach ($getUserName as $CommentUser) { 
                        $name = $CommentUser['first_name']." ".$CommentUser['last_name'];?>
                        <span class="review-holder-name "><?php echo $name;?></span>
                    <?php } ?>
                    </li>
                    <li>To your Product <b>|
                    <?php foreach ($getPrdctName as $Commentprdct) { 
                        $name = $Commentprdct['name'];?>
                        <span class="review-holder-name "><?php echo $name;?></span>
                    <?php } ?> |</b>
                    </li>
                  </ul>
                  <p class="review-date mb-5"><?php echo $DateComment;?></p>
                  <p class="copy"><?php echo $MSG;?></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    <div class="col-md-2"></div>
  </div>
</div>