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
<?php
$id = 1;
foreach ($hasil as $data):
?>
			
			<form action="http://localhost/WebLooking/index.php/ProfilMember" method="post">
			Nama : <input type ="text" name="nama_member" value=<?php echo $data->nama_member;?> /> <br> 
			Email : <input type ="text" name="email" value=<?php echo $data->email;?> /><br>
			No HP : <input type ="text" name="no_hp" value=<?php echo $data->no_hp;?> /><br><br>
			<input type="submit" name="btnsubmit" value="Edit Profil">
			<input type="submit" name="btnsubmit" value="Batal">
			<br>
			</form> 
			
			
	
</div>


<?php
$id++;
endforeach;
?>

<?php
}
?>
