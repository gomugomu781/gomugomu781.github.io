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
		<h1>Yummies! Menu List</h1>
		<div class="card">
            <div class="card-header bg-warning"><a href="tambah.php" class="btn btn-sm btn-success">Add Menu</a></div>
		<div class="card-body">
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Price</th>
							<th>Type</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from menus") or die(mysqli_error($koneksi));
							//script untuk menampilkan data pasien

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['name']; //untuk menampilkan nama ?></td>
						<td><?= $row['price']; ?></td>
						<td><?= $row['type']; ?></td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('are you sure want to delete?');">Delete</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="card">
			<a href="index.html" class="btn btn-sm btn-success">Keluar</a>
		<div class="card-body">
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>