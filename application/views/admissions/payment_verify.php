<?php echo 
form_open('admissions/payment_verify');?>

<div class="container box">
<h5> <b><?=$title ?></b></h5>
<div class="wrapper" >
<p>Payment<b>  Successful</b> <br>
  Name: <?=$name?></b></b> <br>
  Appication Id : <?=$application_id?> <br>
  Examination Access Code: <?=$exam_access_code?><br></p>
  <!-- Amount: <?=$amount?></p> -->
</div>

 <div align="center">
        <script src="https://js.paystack.co/v1/inline.js"></script>
         <button type="button" class="btn btn-info btn-lg" id="btn_activate_email" onclick="location .href='<?php echo site_url() ?>admissions/login'"> Continue</button>
         <!-- <button type="button" class="btn btn-danger btn-lg" id="btn_cancel_payment"> Cancel</button> -->
 </div>


</div>