
<!-- <div class="container box"> -->
 
<!-- <h4><?=$title?></h4> -->

<?php echo validation_errors();?>
<?php echo form_open('admissions/createaccount')?>
  <!-- <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="">
  </div>
  <div class="form-group">
    <label >Email Address</label>
    <input type="text" class="form-control" name="email_address" placeholder="">
  </div>
  
  <div class="form-group">
    <label >Password</label>
    <input type='password' class="form-control" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label >Confirm Password</label>
    <input type='password' class="form-control" name="confirm_password" placeholder="Confirm Password">
  </div>
  <div align="center">
  <button type="submit" class="btn btn-primary">Create</button>
  </div>
  
</form>
</div> -->


<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			<form autocomplete="off">
				<div class="form-group">

					<!-- <span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Your Name</span>
					</label>
					</span> -->

					<span class="input">
					<input class="input_field" type="text" name="username">
						<label class="input_label">
						<span >Username</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email" name="email_address">
						<label class="input_label" >
						<span >Your Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" name="password">
						<label class="input_label">
						<span >Your password</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password"name="confirm_password">
						<label class="input_label">
						<span >Confirm password</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
        </div>
        
        <!-- <a href="#0" class="btn_1 rounded full-width add_top_30">Create</a> -->
        <button type="submit" class="btn_1 rounded full-width add_top_30">Create</button>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="<?php echo base_url("admissions/login");?>">Sign In</a></strong></div>
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
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
  
</body>
