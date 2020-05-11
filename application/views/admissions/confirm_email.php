<?php echo 
form_open('admissions/confirm_email');?>

<div class="container box">
<h5> <b><?=$title ?></b></h5>
<div class="payment_note" >
<p>Welcome to <b>Kingdom Way Academy</b> <br>
Please check your email to activate before you can continue.  </b></b></p>
</div>

 <div align="center">
        <script src="https://js.paystack.co/v1/inline.js"></script>
         <button type="button" class="btn btn-info btn-lg" id="btn_activate_email" onclick="location .href='<?php echo site_url() ?>admissions/login'"> Continue</button>
         <!-- <button type="button" class="btn btn-danger btn-lg" id="btn_cancel_payment"> Cancel</button> -->
 </div>


</div>