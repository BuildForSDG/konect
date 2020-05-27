
	<div class="container">
		<h2 class="title">This is a footer...</h2>
		<p class="subtitle">&copy FarmKonect Nig LTD <strong>2020</strong></p>
	</div>
<footer class="footer primary">
      <div class="content has-text-centered has-text-white">
        <h1>FarmKonect</h1>
        <div class="columns">
          <div class="column">
            <h6>About Us</h6>
            <p class="has-text-center">FarmKonect....
            </p>
          </div>
          <div class="column">
            <h6>Links</h6>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Agent</a></li>
              <li><a href="#">Market</a></li>
              <li><a href="#">FAQS</a></li>
            </ul>
          </div>
          <div class="column">
            <h6>Subscribe</h6>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-medium" type="email" placeholder="Email">
              <span class="icon is-left">
              <i class="fa fa-envelope"></i>
              </span>
            </div>
            <a class="button is-success is-rounded">Subscribe</a>
          </div>
        </div>
      </div>
    </footer>
    <div class="has-background-success has-text-white bottom">
      <div class="container is-fluid">
        <div class="columns">
          <div class="column">
            <p>FarmKonect &copy 2020 Developed with <span style="color: red;"><i class="fas fa-heart"></i></span> by Team-045</p>
          </div>
          <div class="column has-text-right">
          		<a href="#"><i class="fab fa-facebook-square"></i></a>
            	<a href="#"><i class="fab fa-twitter-square"></i></a>
            	<a href="#"><i class="fab fa-github-square"></i></a>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">

// Vanilla JS..
document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
/**
$(document).ready(function() {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});
**/
</script>
</body>
</html>