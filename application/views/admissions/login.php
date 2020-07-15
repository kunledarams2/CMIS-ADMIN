
<!-- <div class="container box"> -->




  <!-- <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input class="form-control" name="password" placeholder="Password" type='password'>
  </div>
  <div  align="center">
  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
  <p><a href=>New User? Create account</a> </p>

  </div>
  
</form>
</div> -->


<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
<div id="login">
<?php echo validation_errors()?>
<?php echo form_open('admissions/login')?>
		<aside>
			<figure>
				<a href=""><img src="/assets/img/logo_black.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <!-- <form > -->
				<!-- <div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div> -->
				<div class="divider"><span><?=$title?></span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="text" autocomplete="off" name="username">
						<label class="input_label">
						<span class="">Username</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="">Password</span>
					</label>
					</span>
					<small><a href="#0">Forgot password?</a></small>
        </div>
        <button type="submit" class="btn_1 rounded full-width add_top_60">Login</button>
				<!-- <a href=""class="btn_1 rounded full-width add_top_60">Login</a> -->
				<div class="text-center add_top_10">New user? <strong><a href=<?php echo site_url('/admissions/createaccount')?>>Sign up!</a></strong></div>
			<!-- </form> -->
			<div class="copy">© 2020 CMIS</div>
		</aside>
	</div>
</body>
