
<!-- 
<div class="container box">
<h4><?=$title ?></h4>
<p>Payment information..........</p>

<?php echo 
form_open('admissions/applicationpaymentform');?>

    <h1>Application Payment</h1>
    <div>
    <p>Thank for making Kingdom Way Academy your first choice <br> Please you have to make 4000 naira for <b> Application </b></b></p>
    
    </div>
</form>
</div> -->

<div class="container box">
<h5> <b><?=$title ?></b></h5>
<div class="wrapper" >
<p>Thank for making <b>Kingdom Way Academy</b> your first choice. <br>
 For the school addmission board to process your application. You have to make a payment of <b>N4000</b>  </b></b></p>
</div>

 <div align="center">
        <script src="https://js.paystack.co/v1/inline.js"></script>
       
       <!-- <form action="#" method="post">
       <input type="hidden" name="amount" value="4000">
       </form>  onclick="payWithPaystack()"-->

       <form action="#" method="post">
       <input type="hidden" name="amount" value="4000">
         <button type="submit" class="btn btn-info btn-lg" id="btn_application_payment" name="pay"> Make Payment</button>
         <button type="submit" class="btn btn-danger btn-lg" id="btn_cancel_payment" formaction = "<?php echo base_url("admissions/login");?>"> Not Now </button>
         <!-- <a href="<?php echo base_url("pages/view");?>">Cancel</a> -->

       </form>
      
 </div>


</div>


