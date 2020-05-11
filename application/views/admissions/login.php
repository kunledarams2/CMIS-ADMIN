
<div class="container box">

<h4><?=$title?></h4>

<?php echo validation_errors()?>
<?php echo form_open('admissions/login')?>
  <div class="form-group">
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
  <p><a href=<?php echo site_url('/admissions/createaccount')?>>New User? Create account</a> </p>

  </div>
  
</form>
</div>
