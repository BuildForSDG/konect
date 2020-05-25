<?php require_once('header.php');
?>	

<section class="section">
	<div class="container">
		<form>
			<div class="field">
				<div class="control">
					<input class="input" type="text" name="fname" placeholder="First Name">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input class="input" type="text" name="lname" placeholder="Last Name">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input class="input" type="email" name="email" placeholder="Email">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input class="input" type="password" name="password" placeholder="Passwword">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<span class="select">
						<select name="gender">
							<option>Select your gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</span>
				</div>
			</div>

			<div class="buttons">
				<a href="#" class="button is-primary">SignIn</a>
				<a href="#" class="button is-link">SignUp</a>
			</div>


		</form>
	</div>
</section>

<?php require_once('footer.php')?>