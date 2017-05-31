<html>
<head>
<title>Konfirmasi | LOOKING</title>
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
<br><br>
<div class="container">
<center>
<h1>Konfirmasi</h1>
<table>
 <?php
        foreach ($rows1 as $row) { 
		?>
<tr><td>Nama Mobil</td><td>:</td><td><?php echo $row -> nama_mobil; ?></td></tr>
<tr><td>Tanggal Sewa</td><td>:</td><td><?php echo $row -> tanggal_sewa; ?></td></tr>
<tr><td>Jam Sewa</td><td>:</td><td><?php echo $row -> jam_pinjam; ?></td></tr>
<tr><td>Tanggal Kembali</td><td>:</td><td><?php echo $row -> tanggal_kembali; ?></td></tr>
<tr><td>Jam Kembali</td><td>:</td><td><?php echo $row -> jam_kembali; ?></td></tr>
<tr><td colspan="3" align="center"><a href="booking"><input type="button" name="oke" value="Konfirmasi"></a></td></tr>
<tr><td colspan="3" align="center"><a href="konfirmasi/hapus/<?php echo $row->id_booking;?>"><input type="button" name="batal" value="Batal"></a></td></tr>

<?php } ?>
</table>
</center>
</div>
</body>
</html>