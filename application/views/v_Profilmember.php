<?php
if (empty($hasil)) {
 echo "Daftar Mobil";
}
else {
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
<h1 class="w3-animate-top">Profil Member |<i class="fa fa-car" style="font-size:24px" ></i></h1><br/><br/>

			
			<form action="http://localhost/WebLooking/index.php/ProfilMember" method="post">
			Nama : <input type ="text" name="nama_member"/> <br> 
			Email : <input type ="text" name="email"/><br>
			No HP : <input type ="text" name="no_hp"/><br><br>
			<input type="submit" name="btnsubmit" value="Edit Profil">
			<input type="submit" name="btnsubmit" value="Batal">
			</form> 
			
			
	
</div>
<?php
$id = 1;
foreach ($hasil as $data):
?>
<tr>
 
 <td> <?php echo $data->nama_member; ?> </td>   
 <td> <?php echo $data->email; ?> </td>  
 <td> <?php echo $data->no_hp; ?> </td>
 
</tr>
<?php
$id++;
endforeach;
?>
</table>
<?php
}
?>
