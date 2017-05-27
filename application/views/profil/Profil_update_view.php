<html>
<head>
	<title> PROFIL MEMBER </title>
<head>
<body>
	<h2> PROFIL MEMBER</h2>
	<p><strong>Edit Profil member</strong></p>
	
	<form action="create" method="POST">
		<?php echo $model->labels['id_member'];?><br/>
		<input type="text" name="id_member" size="10" maxlength="10" value="<?php echo  $model->id_member;?>"/><br/><br/>
		
		<?php echo $model->labels['nama_member'];?><br/>
		<input type="text" name="nama" size="30" maxlength="25" value="<?php echo  $model->nama_member;?>"/><br/><br/>
		
		<?php echo $model->labels['email'];?><br/>
		<textarea name="email"><?php echo $model->email;?></textarea><br/><br/>
		
		<?php echo $model->labels['no_hp'];?><br/>
		<textarea name="no_hp"><?php echo $model->no_hp;?></textarea><br/><br/>
		
		<?php echo $model->labels['password'];?><br/>
		<textarea name="password"><?php echo $model->password;?></textarea><br/><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
	</form>
</body>
</html>
		