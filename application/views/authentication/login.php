<!DOCTYPE html>
<html lang="en">


<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href=""><img src="/assets/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <form>
				<!-- <div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div> -->
				<div class="divider"><span>Login</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="email" autocomplete="off" name="email">
						<label class="input_label">
						<span class="input__label-content">Your email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>
					<small><a href="#0">Forgot password?</a></small>
				</div>
				<a href=<?php echo site_url('/admin/admin_officer')?> class="btn_1 rounded full-width add_top_60">Login</a>
				<!-- <div class="text-center add_top_10">New to Udema? <strong><a href="register.html">Sign up!</a></strong></div> -->
			</form>
			<div class="copy">© 2020 CMIS</div>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>	
  
</body>
</html>