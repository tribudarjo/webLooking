<html>
<head>
<title>PROFIL MEMBER</title>
</head>
<body>
	<h2>EDIT PROFIL MEMBER</h2>
	<table border="1">
		<tr>
			<th width="100">id_member</th>
			<th width="120">nama_member</th>
			<th width="100">email</th>
			<th width="100">no_hp</th>
			<th width="100">password</th>
			<th width="100"></th>
		</tr>
		
		<?php
			foreach($data as $data){
		?>
		<tr>
			<td><?php echo $data->id_member; ?></td>
			<td><?php echo $data->nama_member; ?></td>
			<td><?php echo $data->email; ?></td>
			<td><?php echo $data->no_hp ?></td>
			<td><?php echo $data->password ?></td>
			<td align="center"><a href="profil/update/<?php echo $data->id_member;?>">Edit</a>
			<a href="Profil/delete/<?php echo $data->id_member;?>">Hapus</a></td>
			
		</tr>
		<?php
			}
			?>
		</table>
</body>
</html>