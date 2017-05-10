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
<div id="wrapper" class="active">  

    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">LOOKING<i class="fa fa-home"></i></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li><a href="#">Member<span class="fa fa-user"></span></a></li>
          <li><a href="#">Booking<span class="fa fa-car"></span></a></li>
          <li><a href="#">Contact US<span class="fa fa-search"></span></a></li>
        </ul>
      </div>
          
     
      
</div>
<div class="container">
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
<td align="center" colspan="3"><input type="submit" name="submit" value="Booking"></td>
</tr>
</table>
</form>
</div>
</body>
</html>