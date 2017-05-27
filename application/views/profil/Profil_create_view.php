<html>
<head>
	<title>PROFIL MEMBER</title>
	</head>
</body>
	<h2>PROFIL MEMBER</h2>

	<form action="create" method="POST">
		<?php echo $model->labels['id_member'];?><br/>
		<input type="text" name="kode" size="10" maxlength="10"/><br/><br/>
		
		<?php echo $model->labels['nama_member'];?><br/>
		<input type="text" name="nama" size="30" maxlength="25"/><br/><br/>
		
		<?php echo $model->labels['email'];?><br/>
		<textarea name="email"></textarea><br/><br/>
		
		<?php echo $model->labels['no_hp'];?><br/>
		<textarea name="stok"></textarea><br/><br/>
		
		<?php echo $model->labels['password'];?><br/>
		<textarea name="stok"></textarea><br/><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
	</form>
</body>
</html>
		
				
		