<!doctype HTML>  
<head>
<html>
	<title> Menampilkan hasil inputan form</title>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="prosesinput.php" method="POST">
					<div class="form-group">
						<label for="nokartu">NO_KARTU</label>
						<input type="number" name="no_kartu" class="form-control">
					</div>
					<br><b>
					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<br><b>
					<div class="form-group">
						<label for="jenis kelamin">Jenis Kelamin</label>
						<select name="jenis kelamin" class="form-control">
						<option value="laki laki">laki-laki</option>
						<option value="perempuan">perempuan</option>
					</select>
				</div>
				<br><b>
				<div class="form-group">
					<label for="alamat">alamat</label>
					<textarea name="alamat"class="form-control"></textarea>
					</div>
				<button type="submit" class="btn btn-info">Simpan</button>
				<button type="reset" class="btn btn-info">Batal</button>
		</form>
	</div>
</div>
</div>
</body>
</html>
