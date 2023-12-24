<?php
// koneksi database
include 'koneksi.php';
//Memproses data saat form di submit
if(isset($_POST["kd_barang"]) && !empty($_POST["kd_barang"])){
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
if(empty($file_tmp)){
$update=mysqli_query($koneksi,"UPDATE tb_barang SET
nm_barang='$nama',satuan='$satuan',kategori='$kategori',h_modal='$modal',h_jual='$jual' WHERE kd_barang='$kode'")or die(mysql_error());
if($update){
// echo 'BERHASIL';
echo "<script>alert('DATA BERHASIL DIUPDATE');window.location='index.php';</script>";
}else{
echo "<script>alert('UPDATE
GAGAL');window.location='index.php';</script>";
}
}else{
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
if($ukuran < 1044070){
if(move_uploaded_file($file_tmp, 'file/'.$namafile)){ 
// Cekapakah gambar berhasil diupload atau tidak
$update=mysqli_query($koneksi,"UPDATE tb_barang SET
nm_barang='$nama',satuan='$satuan',kategori='$kategori',h_modal='$modal',h_jual='$jual' WHERE kd_barang='$kode'")or die(mysql_error());
if($update){
echo "<script>alert('DATA BERHASIL DIUPDATE');window.location='index.php';</script>";
}else{
echo "<script>alert('DATA GAGAL DI
UPDATE');window.location='index.php';</script>";
}
}
else{
echo "<script>alert('GAGAL MENGUPLOAD
GAMBAR');window.location='index.php';</script>";
}
}else{
echo "<script>alert('UKURAN FILE TERLALU
BESAR');window.location='tambahdata.php';</script>";
}
}else{
echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI
PERBOLEHKAN');window.location='edit_datamahasiswa.php?id=$kd_barang';</script>";
}
}
}
?>