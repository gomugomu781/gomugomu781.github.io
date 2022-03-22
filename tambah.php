<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Yummies!</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>

<div class="container col-md-6 mt-4">
		<h1>Table Pasien</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
            Yummies! Menu edit
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Menu</label>
						<input type="text" name="name" required="" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" autocomplete="off">
					</div>

					<div class="form-group">
						<label>Type</label>
						<textarea class="form-control" name="type"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Save</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$name = $_POST['name'];
					$price = $_POST['price'];
					$type = $_POST['type'];

					//query untuk menambahkan pasien ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into menus (name,price,type)values('$name', '$price', '$type')") or die(mysqli_error($koneksi));
					//id pasien tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='table.php';</script>";
				}
				?>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>