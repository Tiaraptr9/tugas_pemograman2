<?php

$no_kartu=$_POST['no_kartu'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

include"koneksi.php";

$simpan=$koneksi->query("insert into pasien(no_kartu,nama,jenis_kelamin,alamat);
	values('$no_kartu','$nama','$jenis_kelamin','$alamat')");

if($simpan==true){

	header("location:tampilan.php?pesan=inputBerhasil");
	
} else {
	
	echo"error";
}

?>