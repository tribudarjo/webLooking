<html>
<head>
	<title>PROFIL MEMBER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
	</head>
</body>
	<center><h2>PROFIL MEMBER</h2>

	<form action="create" method="POST">
		<?php echo $model->labels['id_member'];?><br/>
		<input type="text" name="id_member"><br/><br/>
		
		<?php echo $model->labels['nama_member'];?><br/>
		<input type="text" name="nama_member"><br/><br/>
		
		<?php echo $model->labels['email'];?><br/>
		<input type="text" name="email"><br/><br/>
		
		<?php echo $model->labels['no_hp'];?><br/>
		<input type="text" name="no_hp"> <br/><br/>
		
		<?php echo $model->labels['password'];?><br/>
		<input type="password" name="password"><br/><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
	</form>
	</center>
</body>
</html>
		
				
		