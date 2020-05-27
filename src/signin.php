<?php require_once('header.php');
?>	
<div class="hero is-primary">
      <div class="hero-body">
        <h1 class="title has-text-centered is-size-2">Login Form in Bulma</h1>
        <div class="columns is-centered">
          <div class="column is-half">
            <div class="notification is-light">
              <figure class="image container is-64x64">
                <img src="bulma.png">
              </figure>
              <div class="field">
                <label class="label">Name</label>
                <p class="control has-icons-left has-icons-right">
                  <input class="input" type="email" placeholder="Email">
                  <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                <label class="label">Password:</label>
                <p class="control has-icons-left">
                  <input class="input" type="password" placeholder="Password">
                  <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                  </span>
                </p>
              </div>
              <a class="button is-info is-rounded is-outlined is-medium">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once('footer.php')?>