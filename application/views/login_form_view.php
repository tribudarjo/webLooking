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
	  
	 

        <form action="<?= site_url('login/login');?>" method="post">

          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text" name="email" Placeholder="Username" required autofocus></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password" name="password" Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
                                <p>
								Belum punya akun? Silakan klik <?php echo anchor(site_url().'/register','di sini'); ?>
								</p>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" name="submit" value="Sign In"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo"> <img src='../assets/images/FIXX_Copy.png' height='190px' width='190px'> 
</body>
          
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