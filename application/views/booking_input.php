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
           <li class="sidebar-brand"><span class="fa fa-home"></span><a href="#"> LOOKING</a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
		<li>Hai, <?php
		foreach($rows as $row){
			echo $row -> nama_member;
		}
		?></li>
          <li><a href="<?php site_url('index.php/ProfilMember');?>"><span class="fa fa-user"></span> Pengguna</a></li>
          <li><a href="<?php //redirect('booking');?>"><span class="fa fa-book"></span> Pemesanan</a></li>
          <li><a href="#"><span class="fa fa-car"></span> Daftar Mobil</a></li>
<!--		  <li><a href="#"><span class="fa fa-envelope"></span> Hubungi Kami</a></li>-->
		  <li><a href="<?= site_url('login/logout');?>"><span class="fa fa-sign-out"></span> Log Out</a></li>
        </ul>
      </div>
          
     
      
</div>
<div class="container">
<h1>Penyewaan | LOOKING</h1>
<form action="<?php echo base_url().'index.php/booking/tambah_aksi';?>" method="post">
<table style="margin:20px auto;">
<tr>
<td>Mobil</td>
<td><select name="nama_mobil"></td>
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
<td>Harga</td>
<td><input type="text" name="harga" disabled="true"><td>
</tr>
<tr>
<td align="center" colspan="3"><input type="submit" name="submit" value="Booking"></td>
<!--<td><?php echo $_SESSION['id_user'];?> </td>-->
</tr>
</table>
</form>
</div>
</body>
</html>