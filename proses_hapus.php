<?php
include('koneksi.php');
if(isset($_GET['id'])){
$kode=$_GET['id'];
$namafile = 'img_'.$kode.'.jpg';
// Cek apakah file fotonya ada di folder images
if(is_file("file/".$namafile)){ // Jika foto ada
unlink("file/".$namafile); 
// Hapus foto yang telah diupload dari folder images
}
$del=mysqli_query($koneksi,"DELETE FROM tb_barang WHERE kd_barang='$kode'");
if($del){
echo "<script>alert('DATA BERHASIL DIHAPUS');window.location='index.php';</script>";
}else{
echo "<script>alert('DATA GAGAL DIHAPUS');window.location='index.php';</script>";
}
}
?>