<!DOCTYPE html>
<html>

<head>
	<title>Edit Menu</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Yummies !</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
</head>

<body>
	<div class="container col-md-6 mt-4">
		<h1>Menu</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Menu
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id'];

				$data = mysqli_query($koneksi, "select * from menus where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" required="" class="form-control" value="<?= $row['name']; ?>">

						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" required=""  	class="form-control" value="<?= $row['price']; ?>">
					</div>

					<div class="form-group">
						<label>Type</label>
						<input type="text" name="type" required=""  	class="form-control" value="<?= $row['type']; ?>">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Now</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$name = $_POST['name'];
					$price = $_POST['price'];
					$type = $_POST['type'];

					//query mengubah pasien
					mysqli_query($koneksi, "update menus set name='$name', price='$price', type='$type' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('Update success!');window.location='table.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>