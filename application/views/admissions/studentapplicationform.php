
<!-- <h3> Application No: <?=$title?></h3>
<h4> Application No: <?=$title?></h4> -->

<?php echo validation_errors();?>
<?php echo form_open('admissions/studentapplicationform')?>
<div class="container box_header">
<figure>
			<a href="<?php echo base_url("pages/view");?>"><img src="<?php echo base_url();?>/assets/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</figure>
		<h8> Application No: <?=$title?></h8>
	<ul class="nav nav-tabs">
		<li class="nav-items active_tab1" style="border: 1px solid #cccc" id="list_basic_information"><a>Basic
				Information</a></li>

		<li class="nav-items inactive_tab1" style="border: 1px solid #cccc" id="list_personal_information"><a>Personal
				Information</a></li>

		<li class="nav-items  inactive_tab1" style="border: 1px solid #cccc" id="list_education_information"><a>Education
				Information</a></li>

		<li class="nav-items inactive_tab1" style="border: 1px solid #cccc" id="list_church_information"><a>Spiritual/Church
				Information</a></li>

		<li class="nav-items  inactive_tab1" style="border: 1px solid #cccc" id="list_parent_information"><a>Parent/Guardian Information</a></li>
	</ul>
</div>

<div class="container box_application">
	<div class="tab-content">
		<div class="tab-pane active" id="basic_information">
			<div class="panel panel-default">
				<div class="panel-heading"> <b>Basic Information</b><br> Please fill your Basic information below noting that field with a "*" are required.
					<div class="panel-body">
					<br>
						<div claas="form-group">
							<label>*Surname</label>
							<input type="text" class="form-control" name="surname" placeholder="" id="surname">
							<span id="error_surname" class="text-danger"></span>
						</div>
						<br>
						<div claas="form-group">
							<label>*Firstname</label>
							<input type="text" class="form-control" name="firstname" placeholder="" id="firstname">
							<span id="error_firstname" class="text-danger"></span>
						</div>
						<br>
						<div claas="form-group">
							<label>Othername</label>
							<input type="text" class="form-control" name="othername" placeholder="" id="othername">
							<span id="error_othername" class="text-danger"></span>

						</div>
						<br>
						<div claas="form-group">
							<label>*Gender-</label>
							<label class="in-line">
								<input type="radio" name="gender" value="male" checked>Male
							</label>

							<label class="in-line">
								<input type="radio" name="gender" value="female" checked>Female
							</label>
						</div>
						<br>
						<div claas="form-group">
							<label>*Date of Birth</label>
							<input type="text" class="form-control" name="age" placeholder="mm/dd/yyyy" id="datepicker">
							<span id="error_age" class="text-danger"></span>

						</div>
						<br>
						<div claas="form-group">
							<label>Religion</label>
							<input type="text" class="form-control" name="religion" placeholder="" id="religion">
							<span id="error_religion" class="text-danger"></span>
						</div>
						<br>
						<div align="center">
							<!-- <button type="button" class="btn btn-default btn-lg"> Previous</button> -->
							<button type="button"  class="btn_1 rounded medium add_top_30" id="btn_basic_information" name="btn_basic_information"> Next </button>

						</div>
					</div>
				</div>
      </div>
    </div>
    
    <div class="tab-pane fade" id="personal_information">
		<div class="panel panel-default">
			<div class="panel-heading"> <b>Personal Information</b> 
				<div class="panel-body">
				<br>
					<div class="form-group">
						<label>Genotype</label>
						<input type="text" class="form-control" name="genotype" placeholder="" id="genotype">
						<span id="error_genotype" class="text-danger"></span>

					</div>
					<br>
					<div class="form-group">
						<label>Blood Group</label>
						<input type="text" class="form-control" name="bloodgroup" placeholder="" id="bloodgroup">
						<span id="error_blood_group" class="text-danger"></span>
					</div>
					<br>
					<div class="form-group">
						<label>Physical Health Challenge</label>
						<input type="text" class="form-control" name="healthissue" placeholder="" id="healthissue">
						<span id="error_health_issue" class="text-danger"></span>
					</div>

				</div>

			</div>
		</div>
		<br>
		<div align="center">
			<button type="button" class="btn btn-default btn-lg" id="btn_personal_information_prev"> Previous</button>
			<button type="button"  class="btn_1 rounded medium add_top_30" id="btn_personal_information_nxt"> Next </button>

		</div>
  </div>
  
  <div class="tab-pane fade " id="pervious_eduction_info">
		<div class="panel panel-default">
			<div class="panel-heading"><b>Details on pervious eduction</b> 
				<div class="panel-body">
				<br>
					<div class="form-group">
						<label>Primary School Attended</label>
						<input type="text" class="form-control" name="primaryschool" placeholder="" id="pry_sch_name">
						<span id="pry_sch_name_error" class="text-danger"></span>
					</div>
					<br>
					<div class="form-group">
						<div>
						<label class="in-line">Start Date</label>
						<input class="in-line" type="text" class="form-control" name="startdate" placeholder="" id="prystartdatepicker">
						<span id="pry_sch_start_date_error" class="text-danger"></span>
						</div>
						
						<div>
						<label class="in-line">End Date</label>
						<input class="in-line" type="text" class="form-control" name="enddate" placeholder=""  id="pryenddatepicker">
						<span id="pry_sch_end_date_error" class="text-danger"></span>
						</div>

						
					</div>
					<br>
					<p>(JSS2 & SS1 only)</p>
					<div class="form-group">
						<label>Secondary School Attended </label>
						<input type="text" class="form-control" name="secondary" placeholder="">
					</div>
					<br>
					<div class="form-group">
						<div class="form-group">
						<label class="in-line">Start Date</label>
						<input class="in-line" type="text" class="form-control" name="startdatesecondary" placeholder="" id="secstartdatepicker">

						</div>
						
						<div class="form-group">
						<label class="in-line">End Date</label>
						<input class="in-line" type="text" class="form-control" name="enddatesecondary" placeholder=""id="secenddatepicker" >
						</div>
						
					</div>
				</div>

			</div>
		</div>
		<br>

		<div align="center">
			<button type="button" class="btn btn-default btn-lg" id="btn_eduction_prev"> Previous</button>
			<button type="button"  class="btn_1 rounded medium add_top_30" id="btn_eduction_next"> Next </button>

		</div>

	<!-- </div> -->
</div>


	<div class="tab-pane fade" id="church_details">
       <div class="panel panel-default">
        <div class="panel-heading"> <b>Details about your spiritual and church</b>  
         <div class="panel-body">
		 <br>
           <div class="form-group">
            <label >Full name of Church</label>
             <input type="text" class="form-control" name="church" placeholder="">
           </div>
		   <br>
           <div class="form-group">
            <label >Church Denomination</label>
             <input type="text" class="form-control" name="churchdenomiation" placeholder="">
           </div>
		   <br>
           <div class="form-group">
            <label >Full name of Pastor</label>
             <input type="text" class="form-control" name="pastorname" placeholder="">
           </div>
         
         </div>
        
        </div>
       </div>

	   <br>
       <div align="center">
         <button type="button" class="btn btn-default btn-lg" id="btn_church_prev"> Previous</button>
         <button type="button"  class="btn_1 rounded medium add_top_30" id="btn_church_next"> Next </button>
       
       </div>
  
     </div>


     <div class="tab-pane fade" id="parent_information">
       <div class="panel panel-default">
        <div  class="panel-heading"><b> Parent/Guardian Information</b>
         <div class="panel-body">
		  <br>
           <div    class="form-group">
            <label >Name of Parent/Guardian</label>
             <input type="text" class="form-control" name="parentname" placeholder="" id="parent_name" >
			 <span id="parent_name_error" class="text-danger"></span>

           </div>
           <div class="form-group">
            <label >Place of Residence (State/Town)</label>
             <input type="text" class="form-control" name="parentresidence" placeholder="" id="parent_address">
			 <span id="parent_address_error" class="text-danger"></span>

           </div>

           <div class="form-group">
            <label >Mailings Address</label>
             <input type="text" class="form-control" name="parentmaill" placeholder="">
           </div>

           <div class="form-group">
            <label >Profession</label>
             <input type="text" class="form-control" name="parentprofession" placeholder="" id="parent_occupation">
			 <span id="parent_professional_error" class="text-danger"></span>

           </div>
           <div class="form-group">
            <label >Telephone No (GSM)</label>
             <input type="text" class="form-control" name="parentphone" placeholder="" id="parent_phone_number">
			 <span id="parent_phone_number_error" class="text-danger"></span>

           </div>
           <div class="form-group">
            <label >Email</label>
             <input type="email" class="form-control" name="parentemail" placeholder="">
           </div>
         
         </div>
        
        </div>
       </div>

       <div align="center">
         <button type="button" class="btn btn-default btn-lg" id="btn_parent_details_prev"> Previous</button>
         <button type="button"  class="btn_1 rounded medium add_top_30" id="btn_parent_details_next"> Next</button>

         <button type="submit"  class="btn_1 rounded medium add_top_30" id="btn_submit" value="Submit" name="submit_application"> Submit </button>
       
       </div>
	   </div>
	</div>

</form>


