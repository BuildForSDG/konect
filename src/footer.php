<?php
defined('footer') or 
die('<h2>404 Not Found.<em>You are caught!</em></h2>');
?>

<footer style="flex-shrink: none;" id="sticky-footer" class="navbar iis-fixed-bottom py-4 color">
  <div class="container-fluid">
    <h2>FarmKonect</h2>
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h6>About Us</h6>
          <p class="has-text-center">FarmKonect....
          </p>
      </div>
      <div class="col-md-4 col-sm-4">
        <h6>Links</h6>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Agent</a></li>
            <li><a href="#">Market</a></li>
            <li><a href="#">FAQS</a></li>
          </ul>
      </div>
      <div class="col-md-4 col-sm-4">
        <h6>Our Gateway</h6>
          <i>github</i>
          <i>twitter</i>
          <i>instagram</i>
      </div>
    </div>
  <div class="text-center">
    <p>&copy FarmKonect Nig LTD <strong>2020</strong></p>
  </div>
  </div>
</footer>
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

<script src="<?php echo FARMWEB_URL; ?>inc/js/jquery-2.2.4.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/bootstrap.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/select2.full.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.inputmask.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.inputmask.extensions.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/moment.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/icheck.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/fastclick.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.sparkline.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.slimscroll.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/jquery.fancybox.pack.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/app.min.js"></script>
  <script src="<?php echo FARMWEB_URL; ?>inc/js/demo.js"></script>
   <!-- sefecial -->
 <script type="text/javascript" src="<?php echo FARMWEB_URL; ?>inc/js/owl.carousel.min.js"></script>

  <script type="text/javascript" src="<?php echo FARMWEB_URL; ?>inc/js/jquery.flexslider-min.js"></script>

  <script type="text/javascript" src="<?php echo FARMWEB_URL; ?>inc/js/main.js"></script>
  <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
	      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	  });

    $(document).ready( function () {
      $('#myTable').DataTable()({
        scrollY: 400
      });
    });
    </script>

   
</html>