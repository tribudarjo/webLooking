<html>
<head>
<title>PROFIL MEMBER</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
</head>
<body>
	<center><h2>EDIT PROFIL MEMBER</h2>
	<div class="logo"> <img src='../assets/images/FIXX Copy.png' height='150px' width='150px'>
	</div>
	<?php
			foreach($data as $data){
		?>
		<br>
			id_member : <input type="text" name="id_member" value=<?php echo $data->id_member; ?>> <br>
			nama_member :<input type="text" name="nama_member" value=<?php echo $data->nama_member; ?>> <br>
			email :<input type="text" name="email" value=<?php echo $data->email; ?>> <br>
			no_hp :<input type="text" name="no_hp" value=<?php echo $data->no_hp; ?>> <br>
			password :<input type="password" name="password" value=<?php echo $data->password; ?>> <br> <br>
			
			<a href="profil/update/<?php echo $data->id_member;?>"> <input type="submit" name="btnsubmit" value="Edit"></a> <br>
			
			
		</tr>
		<?php
			}
			?>
		</table>
		</center>
</body>
</html>