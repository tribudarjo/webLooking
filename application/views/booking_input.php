<html>
<head>
<title>Booking | LOOKING</title>
<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/menu.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
		<script type='text/javascript' src='<?php echo base_url('assets/js/menu.js')?>'></script>

</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<div class="container">
<center>
<h2>Penyewaan</h2>
<div class="logo"> <img src='../assets/images/FIXX_Copy.png' height='150px' width='150px'>
	</div>
<form action="<?php echo base_url().'index.php/booking/tambah_aksi';?>" method="post">
<table style="margin:20px auto;">
<tr>
<td>Mobil</td>
<td><select name="nama_mobil">
<?php foreach($data_mobil as $data_mobil){
	?>
<option value="<?php echo $data_mobil ->id_mobil ?>"><?php echo $data_mobil -> nama_mobil ?></option><?php } ?></select></td>
</tr>
<tr>
<td>Tanggal Sewa</td>
<td><input type="date" name="tgl_sewa"></td>
</tr>
<tr>
<td>Waktu Sewa</td>
<td><select name="waktu_sewa_jam">
<option value=00 selected>00</option>
<?php for($jam=1; $jam<=23; $jam++){
	$jam_leng=strlen($jam);
	if($jam_leng==1)
		$i="0".$jam;
	else
		$i=$jam;
	?>
<option value=<?php echo $i; ?> > <?php echo $i; ?></option><?php } ?>
	</select>
	: <select name="waktu_sewa_menit">
<option value=00 selected>00</option>
<?php for($menit=1; $menit<=59; $menit++){
	$menit_leng=strlen($menit);
	if($menit_leng==1)
		$j="0".$menit;
	 else
	$j=$menit;
	?>
<option value=<?php echo $j; ?> > <?php echo $j; ?></option><?php } ?>
	</select>
	</td>
</tr>
<tr>
<td>Tanggal Kembali</td>
<td><input type="date" name="tgl_kembali"></td>
</tr>
<tr>
<td>Waktu Kembali</td>
<td><select name="waktu_kembali_jam">
<option value=00 selected>00</option>
<?php for($jam=1; $jam<=23; $jam++){
	$jam_leng=strlen($jam);
	if($jam_leng==1)
		$i="0".$jam;
	else
		$i=$jam;
	?>
<option value=<?php echo $i; ?> > <?php echo $i; ?></option><?php } ?>
	</select>
	: <select name="waktu_kembali_menit">
<option value=00 selected>00</option>
<?php for($menit=1; $menit<=59; $menit++){
	$menit_leng=strlen($menit);
	if($menit_leng==1)
	$j="0".$menit;
	else
	$j=$menit;
	?>
<option value=<?php echo $j; ?> > <?php echo $j; ?></option><?php } ?>
	</select>
	</td>
</tr>
<tr>
<td align="center" colspan="3"><input type="submit" name="submit" value="Booking"></td>
<!--<td><?php echo $_SESSION['id_user'];?> </td>-->
</tr>
</table>
<input type="text" name="id_member" hidden="true" value="<?php foreach($rows as $row){echo $row -> id_member;}?>">
</form>
</center>
</div>
</body>
</html>