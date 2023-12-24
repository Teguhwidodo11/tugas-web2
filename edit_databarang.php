<!DOCTYPE html>
<html>
<head>
<title>Edit Barang</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        <div class="row">
          <div class="col-sm-12" align="center">
            <h1 class="text-center">Edit Data Barang</h1>
            <hr>
<a href="index.php"><b>KEMBALI</b></a>
<br/>
<br/>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tb_barang where kd_barang='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="proses_update.php"
enctype="multipart/form-data">
<table>
<tr>
<td>Kode Barang</td>
<td>
<input type="text" name="kd_barang" value="<?php echo
$d['kd_barang']; ?>" readonly>
</td>
</tr>
<tr>
<td>Nama Barang</td>
<td><input type="text" name="nm_barang" value="<?php echo
$d['nm_barang']; ?>"></td>
</tr>
<tr>
<td>Satuan</td>
<td>
<input type="radio" name="satuan" value="Kg" <?php
if($d['satuan']=='Kg') echo 'checked'?>>Kilo Gram
<input type="radio" name="satuan" value="Pc" <?php
if($d['satuan']=='Pc') echo 'checked'?>>Pcs
</td>
</tr>
<tr>
<td>Kategori</td>
<td>
<Select name=kategori>
<option value="Makanan" <?php if($d['kategori']=="Makanan") echo
'selected="selected"'; ?> >Makanan</option>
<option value="Minuman" <?php if($d['kategori']=="Minuman") echo
'selected="selected"'; ?> >Minuman</option>
<option value="Barang" <?php if($d['kategori']=="Barang") echo
'selected="selected"'; ?> >Barang</option>
</select>
</td>
</tr>
<tr>
<td>Harga Modal</td>
<td><input type="text" name="modal" value="<?php echo
$d['h_modal']; ?>"></td>
</tr>
<tr>
<td>Harga Jual</td>
<td><input type="text" name="jual" value="<?php echo
$d['h_jual']; ?>"></td>
</tr>
<tr>
<td>Gambar</td>
<td><input type="file" name="file"> <img src="file/<?php echo
$d['gambar']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br/><i style="float: left;font-size: 11px;color:red">Abaikan jika tidak merubah photo</i>
</td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
<?php
}
?>
</div>
</div>
</body>
</html>