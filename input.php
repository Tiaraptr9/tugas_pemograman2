<!doctype Html>
<head>
<html>
	<title>Input Data Pasien Bpjs</title>
	<link href="boootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div claass="row">
			<div class="col-md-12">
				<h1><center> Data Pasien Bpjs</b></center></h1>
			<form action="prosesinput.php" method="POST">
				<div class="form-group">
				<label for="nim">NO_KARTU</label>
						<input type="number" name="no_kartu" class="form-control">
					</div><br>
				<div class="form-group">	
				<label for="nim">NAMA</label>
						<input type="text" name="nama" class="form-control">
					</div><br>
				
				<div class="form-group">
						<label for="jenis kelamin">Jenis Kelamin</label>
						<select name="jenis kelamin" class="form-control">
						<option value="laki laki">laki-laki</option>
						<option value="perempuan">perempuan</option>
					</select><br><br>

				<div class="form-group">
				<label for="nim">ALAMAT</label>
						<input type="text" name="alamat" class="form-control">
					</div><br>

				<input type="submit" name="kirim" value="simpan" class="btn btn-info">
				<input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
			</form>
		</div>
		</div>

		</div>
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
	</html>