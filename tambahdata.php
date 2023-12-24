<!DOCTYPE html>
<html>
<head>
<title>Tambah data</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        <div class="row">
          <div class="col-sm-12" align="center">
            <h1 class="text-center">Tambah Data Barang</h1>
            <hr>
<a href="index.php"><B>DATA BARANG</B></a>
<br/><br/>
<form action="prosestambah.php" method="post"
enctype="multipart/form-data">
<table width="400" >
<tr>
<td>Kode Barang</td>
<td><input type="text" name="kd_barang"></td>
</tr>
<tr>
<td>Nama Barang</td>
<td><input type="text" name="nm_barang" requied></td>
</tr>
<tr>
<td>Satuan</td>
<td>
<input type="radio" value=Kg name="satuan">Kilo Gram
<input type="radio" value=Pc name="satuan">Pcs
</td>
</tr>
<tr>
<td>Kategori</td>
<td>
<Select name=kategori>
<option value=Makanan >Makanan</option>
<option value=Minuman >Minuman</option>
<option value=Barang >Barang</option>
</select>
</td>
</tr>
<tr>
<td>Harga Modal</td>
<td><input type="text" name="modal"></td>
</tr>
<tr>
<td>Harga Jual</td>
<td><input type="text" name="jual"></td>
</tr>
<tr>
<td>Gambar</td>
<td><input type="file" name="file"></td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="save" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>