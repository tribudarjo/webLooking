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
<table>

<table class="table table-condensed">
    <thead>
      <tr>
 <th> Nama Member </th>
 <th> Email </th>
 <th> No HP </th>
</tr>
    </thead>
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
