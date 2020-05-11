<html>
    <head>
        <title>Kingdom Way Academy</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/applicationform.css">
        <script type='text/javascript'  src="<?php echo base_url(); ?>/assets/js/admissionform.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

        <link href="<?php echo base_url(); ?>/assets/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

        <script>
           $( function() {
           $( "#datepicker" ).datepicker();
         } );

         $( function() {
           $( "#prystartdatepicker" ).datepicker();
           $( "#pryenddatepicker" ).datepicker();
           $("#secstartdatepicker").datepicker();
           $("#secenddatepicker").datepicker();



         } );

         $( function() {
           $( "#datepicker" ).datepicker();
         } )
        </script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url();?>">Kingdom Way Academy </a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  <!-- </button> -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admissions/login">Admission</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>

<div class="container">

<!-- flash messages -->
<?php if($this->session->flashdata('account_created')) :?>
<?php echo '<p class="alert alert-success">' .$this->session->flashdata('account_created'). '</p>'; ?>

<?php endif; ?>

<?php if($this->session->flashdata('login_success')) :?>
<?php echo '<p class="alert alert-success">' .$this->session->flashdata('login_success'). '</p>'; ?>

<?php endif; ?>

<?php if($this->session->flashdata('login_error')) :?>
<?php echo '<p class="alert alert-danger">' .$this->session->flashdata('login_error'). '</p>'; ?>

<?php endif; ?>

<?php if($this->session->flashdata('application_error')):?>
  <?php echo '<p class="alert alert-danger>'.$this->session->flashdata('application_error'). '</p>';?>
<?php endif; ?>