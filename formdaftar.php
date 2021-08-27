<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Baru</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

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
		<h2>Tambah Data Peserta</h2>
		<form method="post" action="simpan.php">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA</label>
				<div class="col-md-8">
					<input type="text" name="nama_siswa" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ALAMAT</label>
				<div class="col-md-8">
					<textarea type="" name="alamat" class="form-control"></textarea>
				</div>
			</div>

			 <fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">JENIS KELAMIN</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
			          <label class="form-check-label">
			            Laki Laki
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
			          <label class="form-check-label">
			            Perempuan
			          </label>
			        </div>
			      </div>
			    </div>
			  </fieldset>


			<div class="form-group row">
		      <label class="col-sm-2 col-form-label">AGAMA</label>
		      <div class="col-md-8">
			      <select class="form-control" name="agama">
			        <option selected>Pilih Salah satu</option>
			        <option>Islam</option>
			        <option>Protestan</option>
			        <option>Katolik</option>
			        <option>Hindu</option>
			        <option>Buddha</option>
			      </select>
		      </div>
		    </div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">SEKOLAH ASAL</label>
				<div class="col-md-8">
					<input type="text" name="sekolah_asal" class="form-control">
				</div>
			</div>

			<div class="row text-right" style="padding-top: 5px; margin: 2px, 2px;">
			    <div class="col-md-2" style="padding-top: 5px;">
			      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			    </div>
			    <div class="col-sm-2" style="padding-top: 5px;">
			      <button type="reset" class="btn btn-info">Reset</button>
			    </div>
			    <div class="col-sm-2" style="padding-top: 5px;">
			   	  <a href="index.php" type="submit" class="btn btn-success" >Kembali</a>
			    </div>
			</div>
		</form>

		<!-- 000000000000000 
		<form method="post" action="simpan.php">
			<div>
			<table>
				<tr>
					<td>NIM </td>
					<td><input type="text" name="nim" class="form-control"></td>
				</tr>
				<tr>
					<td>NAMA </td>
					<td><input type="text" name="nama" class="form-control"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin </td>
					<td>
						<input type="radio" name="jenis_kelamin" value="L" class="form-control" >Laki-laki
					</td>
					<td><input type="radio" name="jenis_kelamin" value="P" class="form-control">Perempuan</td>
				</tr>
				<tr>
					<td>JURUSAN </td>
					<td><select name="jurusan" class="form-control">
						<option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
						<option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
						<option value="AKUNTANSI">AKUNTANSI</option>
					</select></td>			
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit"value="Simpan" name="simpan">SIMPAN</button> </td>
					<td> <a href="">Kembali</a></td>
				</tr>
			</table>
			</div>
		</form>-->
	</div>
</body>
</html>