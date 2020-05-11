

<?php  ?>
<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Basic Information</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="firstname" placeholder="First Name" />
    <input type="text" name="lastname" placeholder="Lastname" />
    <input type="text" name="othername" placeholder="Othername" />
    <input type="text" name="religion" placeholder="Religion" />
    <input type="text" name="age" placeholder="Age" />
    <!-- <div class="form-group">
    <div claas="form-group"> -->
           <!-- <label >Gender-</label>
           <label class="in-line">
             <input type="radio" name="gender" value="male" checked >Male
           </label>

           <label class="in-line">
             <input type="radio" name="gender" value="female" checked >Female
           </label>
   </div> -->
    <input type="text" name="gender" placeholder="Gender" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>