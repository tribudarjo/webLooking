<?php
if (empty($hasil)) {
 echo "Daftar Mobil";
}
else {
?>
<!DOCTYPE html>
<html>

<head>
	<title>Daftar Mobil</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css')?>">
	<script type='text/javascript' src='<?php echo base_url('assets/js/mobile.js')?>'></script>
</head>
<body>
<div class="w3-container">
<h2>Daftar Mobil</h2>

<div class="col-md-5 col-sm-4 col-xs-6"> 
    <table width="80%" class="w3-table"> 
	<style>
  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 2px solid #ddd;
}
</style>
</head>
    <thead>
      <tr>
 <th> Gambar Mobil </th>
 <th> Nama Mobil </th>
 <th> Harga </th>
 <th> Deskripsi </th>
 <th> Tahun </th>
 <th> Nama Rental </th>
</tr>
    </thead>
</div>
</div>
<?php
$id = 101;
foreach ($hasil as $data):
?>

<tr>
 <td>  <img src="<?php echo base_url($data->gambar_mobil) ?>"> </td>
 <td> <?php echo $data->nama_mobil; ?> </td>
 <td> <?php echo $data->harga; ?> </td>  
 <td> <?php echo $data->deskripsi; ?> </td>
 <td> <?php echo $data->tahun; ?> </td>
 <td> <?php echo $data->nama_rental; ?> </td>

 
</tr>
<?php
$id++;
endforeach;
?>
</table>
</div>
<?php
}
?>
