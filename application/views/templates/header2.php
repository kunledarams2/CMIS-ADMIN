
<html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CMIS ">
    <meta name="" content="">
    <title>Kingdom Way Academy</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url(); ?>/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url(); ?>/assets/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url(); ?>/assets/img/apple-touch-icon-144x144-precomposed.png">
	
	

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet"> -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/vendors.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style_2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">



    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type='text/javascript'  src="<?php echo base_url(); ?>/assets/js/admissionform.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link href="<?php echo base_url(); ?>/assets/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
	<!-- <script src="js/modernizr.js"></script> -->
    <script type='text/javascript'  src="<?php echo base_url(); ?>/assets/js/modernizr.js"></script>
    

    <div class="container">
        <!-- flash messages -->
        <?php if($this->session->flashdata('account_created')) :?>
        <?php echo '<p class="alert alert-success">' .$this->session->flashdata('account_created'). '</p>'; ?>

        <?php endif; ?>

        <?php if($this->session->flashdata('login_success')) :?>
        <?php echo '<p class="alert alert-success">' .$this->session->flashdata('login_success'). '</p>'; ?>

        <?php endif; ?>

        <?php if($this->session->flashdata('login_error')) :?>
        <?php  echo '<script type="text/javascript">alert("' . $this->session->flashdata(''). '")</script>'; ?>
        <!-- '<p class="alert alert-danger">' .$this->session->flashdata('login_error'). '</p>'
    '<script type="text/javascript">alert("' . $this->session->flashdata(''). '")</script>' -->
    
        <?php endif; ?>

        <?php if($this->session->flashdata('application_error')):?>
        <!-- <?php echo   'class="nav-link" data-toggle="modal" data-target="#exampleModal"' ?> -->
        <!-- '<p class="alert alert-danger>'.$this->session->flashdata('application_error'). '</p>'; -->
        <?php endif; ?>
            
        <!-- class="nav-link" data-toggle="modal" data-target="#exampleModal" -->

       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
            </div>
        </div>
    </div>