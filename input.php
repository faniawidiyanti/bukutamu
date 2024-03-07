<?php
include "koneksi.php";


$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_telepon=$_POST['no_telepon'];
$kepentingan=$_POST['kepentingan'];
$tanggal=$_POST['tanggal'];



$input=$koneksi->query ("insert into biodata (nama,jenis_kelamin,alamat,no_telepon,kepentingan,tanggal) values ('$nama','$jenis_kelamin','$alamat','$no_telepon','$kepentingan','$tanggal')");

header('location:rumah.php') ;


?>

 
