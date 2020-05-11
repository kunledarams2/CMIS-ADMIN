
<div class="container box">
 
<h4><?=$title?></h4>

<?php echo validation_errors();?>
<?php echo form_open('admissions/createaccount')?>
  <div class="form-group">
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
</div>
