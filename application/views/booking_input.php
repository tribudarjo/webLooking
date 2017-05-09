<html>
<head>
<title>Booking | LOOKING</title>
</head>
<body>
<h1>Booking | LOOKING</h1>
<form action="<?php echo base_url().'booking/tambah_aksi'; ?>" method="post">
<table style="margin:20px auto;">
<tr>
<td>Mobil</td>
<td><input type="input" name="nama_mobil"></td>
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
<td><input type="submit" name="submit" value="Booking"></td>
</tr>
</table>
</form>
</body>
</html>