<?php 
include 'koneksi.php';

$id_siswa		= $_POST['id_siswa'];
$nama_siswa		= $_POST['nama_siswa'];
$alamat			= $_POST['alamat'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$agama			= $_POST['agama'];
$sekolah_asal	= $_POST['sekolah_asal'];

$query="INSERT INTO siswa set id_siswa='$id_siswa', nama_siswa='$nama_siswa', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' ";
mysqli_query($koneksi, $query);

header("location:index-utama.php");

 ?>