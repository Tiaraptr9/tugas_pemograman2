<?php

$no_kartu=$_GET['no_kartu'];
include "koneksi.php";
					
$hapus=$koneksi->query("delete into pasien='$no_kartu'")

if($hapus==true){

	header("location:tampilan.php?pesan=hapusberhasil");

} else {
	
	echo"error";
}

