<html>
<head>
<title>PROFIL MEMBER</title>
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
	<center><h2>EDIT PROFIL MEMBER</h2>
	<div class="logo"> <img src='../assets/images/FIXX Copy.png' height='150px' width='150px'>
	</div>
	<table align="center">
	<?php
			foreach($data as $data){
		?>
		<tr>
		<td>Nama_member</td><td>:</td><td><input type="text" disabled="true" name="nama_member" value="<?php echo $data->nama_member; ?>"></td></tr>
		<tr><td>E-mail</td><td>:</td><td><input type="text" disabled="true" name="email" value="<?php echo $data->email; ?>"></td></tr>
		<tr><td>No HP</td><td>:</td><td><input type="text" disabled="true" name="no_hp" value="<?php echo $data->no_hp; ?>"></td></tr>
		<tr><td>Password</td><td>:</td><td><input type"password" disabled="true" name="password" value="<?php echo $data->password; ?>"></td></tr>
		<tr><td colspan="3" align="center"><a href="profil/update/<?php echo $data->id_member;?>"><input type="submit" name="btnsubmit" value="Edit"></a> </tr>
		<tr><td colspan="3">Atau apakah ingin menghapus akun? Klik <a href="profil/hapus/<?php echo $data->id_member;?>">di sini</a> </tr>
		<?php
			}
			?>
		</table>
		</center>
		</div>
</body>
</html>