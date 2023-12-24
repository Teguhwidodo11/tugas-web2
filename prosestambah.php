<!DOCTYPE html>
<html>
<head>
<title>Upload File </title>
</head>
<body>
<h1>Upload File </h1>
<?php
include 'koneksi.php';
if($_POST['save']){
	// menangkap data yang di kirim dari form
$kode = $_POST['kd_barang'];
$nama = $_POST['nm_barang'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$modal = $_POST['modal'];
$jual = $_POST['jual'];
$ekstensi_diperbolehkan = array('png','jpg');
$photo = $_FILES['file']['name'];
$x = explode('.', $photo);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$namafile = 'img_'.$kode.'.jpg';
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
if($ukuran < 1044070){
move_uploaded_file($file_tmp, 'file/'.$namafile);
$query = mysqli_query($koneksi,"insert into tb_barang (kd_barang,nm_barang,satuan,kategori,h_modal,h_jual,gambar)
values('$kode','$nama','$satuan','$kategori','$modal','$jual','$namafile')");
if($query){
// echo 'FILE BERHASIL DI UPLOAD';
echo "<script>alert('DATA BERHASIL DISIMPAN');window.location='index.php';</script>";
}else{
echo "<script>alert('DATA GAGAL DI SIMPAN');window.location='index.php';</script>";
}
}else{
echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
}
}else{
echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN');window.location='tambahdata.php';</script>";
}
}
?>
</body>
</html>