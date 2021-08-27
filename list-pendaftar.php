<!DOCTYPE html>
<html>
<head>
	<title>DTS - PMB</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
		<!--LOGO-->
		<a href="index.php" class="navbar-brand">DIGITAL TALENT</a>

		<!-- ME N U <3 -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="list-pendaftar.php" class="nav-link">Calon Peserta</a>				
			</li>
			<li class="nav-item">
				<a href="formdaftar.php" class="nav-link">Daftar Baru</a>	
			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<h3>Pendaftar</h3>
<br>
		<form method="post" action="">
			<table border="1" class="table table-bordered table-striped table-hover">
	            <thead class="thead-dark">
				<tr >
					<th scope="col" style="width: 1%;">NO</th>
	                <th scope="col" style="width: 15%;">Nama Peserta</th>
	                <th scope="col">Alamat</th>
	                <th scope="col" style="width: 10%">Jenis Kelamin</th>
	                <th scope="col" style="width: 5%">Agama</th>
	                <th scope="col">Sekolah Asal</th>
	                <th scope="col">Tindakan</th>
				</tr>
	            </thead>
			<?php  
			include 'koneksi.php';
			$siswa = mysqli_query($koneksi,"SELECT * FROM siswa");
			?>
			<?php $no = 1 ;?>
			
			<?php while ( $row = mysqli_fetch_assoc($siswa)) : ?>
			<tbody class="table-striped">
				<tr>
					<td style="width: 5px"><?= $no; ?></td>
					<td><?= $row["nama_siswa"]; ?></td>
					<td><?= $row["alamat"]; ?></td>
					<td><?= $row["jenis_kelamin"]; ?></td>
					<td><?= $row["agama"]; ?></td>
					<td><?= $row["sekolah_asal"]; ?></td>
					<td style="text-align: center;">
						<a href="#" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-danger">Hapus</a> 
						<!-- <a href='form-edit.php?id=<?= $row["id_mhs"]; ?>'  class="btn btn-warning">Edit</a>
						<a href="delete.php?id=<?= $row["id_mhs"]; ?>" class="btn btn-danger">Hapus</a> -->
					</td>   
					
				</tr>
			</tbody>
			<?php $no++ ?>
			<?php endwhile; ?>
			</table>
		</form>
	</div>
<!-- 	<br><br>
	<a href="formdaftar.php">[+] Tambah Baru</a>  |  
	<a href="pluginfile.php">CETAK</a> -->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
