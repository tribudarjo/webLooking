<?php
if (empty($hasil)) {
 echo "Daftar Mobil";
}
else {
?>
<h3> Daftar Mobil </h3>
<table>
<tr bgcolor="FFEE22">
 <th> ID Mobil </th>
 <th> Nama Mobil </th>
 <th> Harga </th>
 <th> Deskripsi </th>
 <th> Gambar Mobil </th>
 <th> Tahun </th>
 <th> Nama Rental </th>
 <th> Unit Mobil </th>
</tr>
<?php
$id = 101;
foreach ($hasil as $data):
?>
<tr>
 <td> <?php echo $id; ?> </td>
 <td> <?php echo $data->nama_mobil; ?> </td>   
 <td> <?php echo $data->harga; ?> </td>  
 <td> <?php echo $data->deskripsi; ?> </td>
 <td> <?php echo $data->gambar_mobil; ?> </td>
 <td> <?php echo $data->tahun; ?> </td>
 <td> <?php echo $data->nama_rental; ?> </td>
 <td> <?php echo $data->unit_mobil; ?> </td>
 
</tr>
<?php
$id++;
endforeach;
?>
</table>
<?php
}
?>
