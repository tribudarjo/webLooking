<html>
<head>
<title>PROFIL MEMBER</title>
</head>
<body>
	<h2>EDIT PROFIL MEMBER</h2>
	<?php
			foreach($data as $data){
		?>
		<br>
			id_member : <input type="text" name="id_member" value=<?php echo $data->id_member; ?>> <br>
			nama_member :<input type="text" name="nama_member" value=<?php echo $data->nama_member; ?>> <br>
			email :<input type="text" name="email" value=<?php echo $data->email; ?>> <br>
			no_hp :<input type="text" name="no_hp" value=<?php echo $data->no_hp ?>> <br>
			password :<input type="password" name="password" value=<?php echo $data->password ?>> <br> <br>
			
			<td align="center"><a href="profil/update/<?php echo $data->id_member;?>">Edit</a> <br>
			
			
		</tr>
		<?php
			}
			?>
		</table>
</body>
</html>