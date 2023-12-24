<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS - TEGUH WIDODO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        <div class="row">
          <div class="col-sm-12" align="center">
            <h1 class="text-center">Tambah Data Barang</h1>
            <hr>
<?php
include 'koneksi.php';
?>
<a href="tambahdata.php"><b>TAMBAH DATA</b></a>
<br/><br/>
<table border="1" cellpadding="10">
<tr>
<th>No</th>	
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Satuan</th>
<th>Kategori</th>
<th>Harga Modal</th>
<th>Harga Jual</th>
<th>Gambar</th>
<th>Action</th>
</tr>
<?php
$no = 1;
$data = mysqli_query($koneksi,"select * from tb_barang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kd_barang']; ?></td>
<td><?php echo $d['nm_barang']; ?></td>
<td><?php
if($d['satuan']=='Kg') echo 'Kilo Gram';
else if($d['satuan']=='Pc') echo 'Pcs';
?>
</td>
<td><?php echo $d['kategori']; ?></td>
<td><?php echo $d['h_modal']; ?></td>
<td><?php echo $d['h_jual']; ?></td>
<td>
<img src="<?php echo "file/".$d['gambar']; ?>" width="100"
height="130" >
</td>
<td>
<a href="edit_databarang.php?id=<?php echo $d['kd_barang'];
?>">Edit</a> |
<a href="proses_hapus.php?id=<?php echo $d['kd_barang']; ?>"
onclick="return confirm('Anda yakin akan menghapus data ini? \n<?php echo $d['kd_barang']; ?>')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<br/>
<?php
echo "<b>Total data : ". mysqli_num_rows($data)." Barang</b>";
?>
          </div>
        </div>
</body>
</html>