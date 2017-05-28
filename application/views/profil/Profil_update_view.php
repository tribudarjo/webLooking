<html>
<head>
	<title> PROFIL MEMBER </title>
<head>
<body>
	<h2> PROFIL MEMBER</h2>
	<p><strong>Edit Profil member</strong></p>
	
	<form action="create" method="POST">
		
		
		<?php echo $model->labels['nama_member'];?><br/>
		<input type="text" name="nama_member" value="<?php echo  $model->nama_member;?>"/><br/>
		
		<?php echo $model->labels['email'];?><br/>
		<input type="text" name="email"value="<?php echo $model->email;?>"><br/>
		
		<?php echo $model->labels['no_hp'];?><br/>
		<input type="text" name="no_hp" value="<?php echo $model->no_hp;?>"><br/>
		
		<?php echo $model->labels['password'];?><br/>
		<input type="password" name="password" value="<?php echo $model->password;?>"><br/><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
	</form>
</body>
</html>
		