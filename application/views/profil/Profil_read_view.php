<html>
<head>
<title>PROFIL MEMBER</title>
</head>
<body>
	<h3> PROFIL MEMBER</h3>
	<?php
			foreach($data as $data){
		?>
		
		<br>
			ID Member  <input type="text" name="id_member" value=<?php echo $data->id_member; ?>> <br>
			Nama Member <input type="text" name="nama_member" value=<?php echo $data->nama_member; ?>> <br>
			Email <input type="text" name="email" value=<?php echo $data->email; ?>> <br>
			No HP <input type="text" name="no_hp" value=<?php echo $data->no_hp; ?>> <br>
			Password <input type="password" name="password" value=<?php echo $data->password; ?>> <br> <br>
			
			<a href="profil/update/<?php echo $data->id_member;?>"> <input type="submit" name="btnsubmit" value="Edit Profil"></a> <br>
			
			
		</tr>
		<?php
			}
			?>
		</table>
</body>
</html>