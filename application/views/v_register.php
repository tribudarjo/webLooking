 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
   <meta charset="UTF-8">
   <title>  Pendaftaran Akun  </title>
 
 <meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
 
 </head>
 <body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
     <div class="container">
	 <div class="middle">
	 <center><div id="login">
			<div class="row">
				
 
     <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-user" area-hidden="true"></i></span>
     <input type="text" name="nama_member" placeholder="Enter your Name" value="<?php echo set_value('nama_member'); ?>"/>
     </p>
     
 
     <p>Email:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-envelope" area-hidden="true"></i></span>
     <input type="text" name="email" placeholder="Enter your Email" value="<?php echo set_value('email'); ?>"/>
     </p>

	 
	   <p>NO Handphone:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-phone" area-hidden="true"></i></span>
     <input type="text" name="no_hp" placeholder="Enter your Phone" value="<?php echo set_value('no_hp'); ?>"/> 
     </p>
  
 
		<p>Password:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" area-hidden="true"></i></span>
     <input type="password" name="password" placeholder="Enter your Password" value="<?php echo set_value('password'); ?>"/>
     </p>
   
 
     <p>Password Confirm:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" area-hidden="true"></i></span>
     <input type="password" name="password_conf" placeholder="Confirm your Password" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
    </p>
 
     <p>
	 <div class="form-group ">
	 <div>
     <span style="width:50%; text-align:left;  display: inline-block;"><input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="btnSubmit" value="Daftar" />
     </p>
	 <p>
     Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?>
     </p>
	 </div>
	 </div>
	 </div>
	 </div>
	 
 
     <?php echo form_close();?>
  <img src='../assets/images/FIXX Copy.png' height='250px' width='200px'> 
						</center>
						
     
	 </div>
	 </div>
	 <script type="text/javascript" src="assets/js/bootstrap.js"></script>
 </body>
 </html>