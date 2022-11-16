<!doctype Html>
</html>
<head>
	<title>Data Mahasiswa</title>
	<link href="boootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="dataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div claass="row">
			<div class="col-md-12">
				<h1><center> Data Pasien BPJS</b></center></h1>
				<form action="prosesedit.php" method="POST">
					<?php
					$id=$_GET['no_kartu'];
					include "koneksi.php";
					$row=$tampil->fetch_assoc();
					?>

					<div class="form-group">
						<label for="no_kartu">NO_KARTU</label>
						<input type="number" name="no_kartu" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="jenis kelamin">Jenis Kelamin</label>
						<select name="jenis kelamin" class="form-control">
						<option value="laki laki">laki-laki</option>
						<option value="perempuan">perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label for="alamat">alamat</label>
					<textarea name="alamat"class="form-control"></textarea>
					</div>
				<input type="submit" name="kirim" value="UBAH" class="btn btn-info">
				<input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
			</form>
		</div>
		</div>

		</div>
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
	</html>

