<html>
<head>
<title>Login | LOOKING</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>

</head>

<body>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">
	  
	 

       
          <fieldset class="clearfix">

             <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
	<input type="text" name="nama_member" value="<?php echo set_value('nama_member'); ?>"  placeholder="Enter your Name"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>Email:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
     <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter your Email"/>
     </p>
     <p> <?php echo form_error('email'); ?> </p>
	 
	   <p>Phone:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
     <input type="text" name="no_hp" value="<?php echo set_value('no_hp'); ?>" placeholder="Enter your Phone"/>
     </p>
     <p> <?php echo form_error('no_hp'); ?> </p>
 
     <p>Password:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter your Password"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Password Confirm:</p>
     <p>
	 <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" placeholder="Confirm your Password"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" value="Daftar" />
	 
     </p>
 
     <?php echo form_close();?>
	 
 
     <p>
     Kembali ke menu login, Silakan klik <?php echo anchor(site_url().'/login','di sini..'); ?>
     </p>

          <ul>
  
             <div>
                              
                            </div>

          </fieldset>
		  
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>
   <div class="clearfix"></div>
      <div class="clearfix"></div>
	     <div class="clearfix"></div>
      </div> <!-- end login -->
	       <div class="clearfix">
		   <br><br><br><br><br><br><br><div class="logo"> <img src='../assets/images/FIXX_Copy.png' height='190px' width='200px'> </div> 
		   </div>
		  
            
          </div>
          <div class="clearfix"></div>
      </div>
      
      </div>
	
</center>

    </div>

</div>
</div>
        </div>
        
</div>
</body>
</html>