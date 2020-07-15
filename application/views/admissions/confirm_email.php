<?php echo 
form_open('admissions/confirm_email');?>

<body id="register_bg">

	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<div class="container box">
		<h5> <b><?=$title ?></b></h5>
		<div class="wrapper">
			<p>Welcome to <b>Kingdom Way Academy</b> <br>
				Please check your email to activate before you can continue. </b></b></p>
		</div>

		<div align="center">
			<script src="https://js.paystack.co/v1/inline.js"></script>
			<button type="button" class="btn_1 rounded medium add_top_30" id="btn_activate_email"
				onclick="location .href='<?php echo site_url() ?>admissions/login'"> Continue</button>
			<!-- <button type="button" class="btn btn-danger btn-lg" id="btn_cancel_payment"> Cancel</button> -->
		</div>


	</div>
</body>