 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
   <meta charset="UTF-8">
   <title>  REGISTER  </title>
 
 <meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
 
 </head>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>
 <body>
<<<<<<< HEAD
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
     <div class="container">
	 <div class="middle">
	 <center><div id="login">
			<div class="row">
				
=======
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="main">
 
     <center>
	 <div class="container">
	 <div class="middle">
	 <div id="login">
	             <div class="row">

 <fieldset class="clearfix">
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
 
     <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
<<<<<<< HEAD
	 <span class="input-group-addon"><i class="fa fa-user" area-hidden="true"></i></span>
     <input type="text" name="nama_member" placeholder="Enter your Name" value="<?php echo set_value('nama_member'); ?>"/>
=======
	 <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
	<input type="text" name="nama_member" value="<?php echo set_value('nama_member'); ?>"  placeholder="Enter your Name"/>
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
     </p>
     
 
     <p>Email:</p>
     <p>
<<<<<<< HEAD
	 <span class="input-group-addon"><i class="fa fa-envelope" area-hidden="true"></i></span>
     <input type="text" name="email" placeholder="Enter your Email" value="<?php echo set_value('email'); ?>"/>
=======
	 <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
     <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter your Email"/>
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
     </p>

	 
	   <p>Phone:</p>
     <p>
<<<<<<< HEAD
	 <span class="input-group-addon"><i class="fa fa-phone" area-hidden="true"></i></span>
     <input type="text" name="no_hp" placeholder="Enter your Phone" value="<?php echo set_value('no_hp'); ?>"/> 
=======
	 <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
     <input type="text" name="no_hp" value="<?php echo set_value('no_hp'); ?>" placeholder="Enter your Phone"/> 
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
     </p>
  
 
		<p>Password:</p>
     <p>
<<<<<<< HEAD
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" area-hidden="true"></i></span>
     <input type="password" name="password" placeholder="Enter your Password" value="<?php echo set_value('password'); ?>"/>
=======
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter your Password"/>
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
     </p>
   
 
     <p>Password Confirm:</p>
     <p>
<<<<<<< HEAD
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" area-hidden="true"></i></span>
     <input type="password" name="password_conf" placeholder="Confirm your Password" value="<?php echo set_value('password_conf'); ?>"/>
=======
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" placeholder="Confirm your Password"/>
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
     </p>
    </p>
 
     <p>
<<<<<<< HEAD
	 <div class="form-group ">
	 <div>
     <span style="width:50%; text-align:left;  display: inline-block;"><input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="btnSubmit" value="Daftar" />
     </p>
	 <p>
     Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?>
     </p>
=======
     <input type="submit" name="btnSubmit" value="Daftar" />
	 
     </p>
 
     <?php echo form_close();?>
	 
 
     <p>
     Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?>
     </p></center>
	 </fieldset>
	 <div class="clearfix"></div>
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
	 </div>
	 </div>
	 </div>
	 </div>
	 
<<<<<<< HEAD
 
     <?php echo form_close();?>
  <img src='../assets/images/FIXX Copy.png' height='250px' width='200px'> 
						</center>
						
     
	 </div>
	 </div>
	 <script type="text/javascript" src="assets/js/bootstrap.js"></script>
=======
	 <div class="logo" img src='../assets/images/FIXX Copy.png' height='250px' width='200px'> 

	 <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</div>
>>>>>>> f745fc1a879d71e10033d66abfde0bccf283eb6c
 </body>
 </html>