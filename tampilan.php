<!doctype Html>
<head>
<html>
	<title>Data Mahasiswa</title>
	<link href="boootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="dataTables/datatables.min.css" rel="stylesheet">

</html>
<head>
	
</head>
<body>
	<div class="container">
		<div claass="row">
			<div class="col-md-12">
				<h1><center> Data Pasien Bpjs </b></center></h1>
<?php

if($_GET['Pesan']=="inputBerhasil"){

?>
				<div class="alert alert-success">
				Penyimpanan Berhasil!
				</div>
<?php

}
?>



				<table id="datatables" class="table table-bordered"> 
				<thead>
				<tr>
					<th> no kartu </th><th> Nama </th><th> jenis kelamin</th><th> Alamat</th>
					<th>
						<a href ="login.php">
							<button class="btn btn-info glyphicon-plus"></button>
						</a>
					</th>
				</tr>
		</thead>
		<tbody>
	<?php

	include "koneksi.php";
	$sql=$koneksi->query("select * from pasien order by no_kartu ASC") ; 

	while ($row = $sql->fetch_assoc()){
	?>

		<tr>
			<td><?php echo $row['no_kartu']?></td>
			<td><?php echo $row['nama']?></td>
			<td><?php echo $row['jenis kelamin']?></td>
			<td><?php echo $row['alamat']?></td>
		<td>
			<a href="edit.php">
				<button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
			</a>

			<a href="hapus.php">
				<button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
			</a>
		</td>
	</tr>

<?php
}
?>
</tbody>
</table>
</div>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dataTables/datatables.min.js"></script>
<script type="text/java/script">
	$(document).ready(function(){
		$('#dataTables').DataTables();
	});

</script>


</body>
</html>