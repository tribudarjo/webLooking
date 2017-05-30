<html>
<head>
	<title> PROFIL MEMBER </title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/menu.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
		<script type='text/javascript' src='<?php echo base_url('assets/js/menu.js')?>'></script>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<br>
<div class="container">

	<center><h2> PROFIL MEMBER</h2>
	<p><strong>Edit Profil member</strong></p>
	
	<form action="<?php site_url('Profil/update');?>" method="POST">
		
		<input type="hidden" name="id_member" value="<?php echo  $model->id_member;?>"/><br/>
		<table>
		<?php echo $model->labels['nama_member'];?><br/>
		<input type="text" maxlength="30" name="nama_member" value="<?php echo  $model->nama_member;?>"/><br/>
		
		<?php echo $model->labels['email'];?><br/>
		<input type="text" maxlength="30" name="email"value="<?php echo $model->email;?>"><br/>
		
		<?php echo $model->labels['no_hp'];?><br/>
		<input type="text" maxlength="30" name="no_hp" value="<?php echo $model->no_hp;?>"><br/>
		
		<?php echo $model->labels['password'];?><br/>
		<input type="password" maxlength="30" width="5px" name="password" value="<?php echo $model->password;?>"><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/> | <input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
	</form>
	</center>
	</div>
</body>
</html>
		