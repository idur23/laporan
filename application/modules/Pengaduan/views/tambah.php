<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Rakyat/header'); ?>
</head>
<body>
	<?php $this->load->view('Rakyat/navbar'); ?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('Rakyat/side'); ?>
			<main class="col-md-9 ms-sm-auto col-lg-8 px-md-1">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		        <h1 class="h2">Pengaduan</h1>
		      </div>
		      	<?php
					if (isset($error)) {
						echo "ERROR UPLOAD : <br/>";
						print_r($error);
						echo "<hr/>";
					}
				?>
		      <div class="container">
				<?php echo form_open_multipart('Pengaduan/aksi_upload'); ?>
		        <form action="" enctype="multipart/form-data" method="post">
					<table class="table" width="100" align="center">
						<tr>
							<td>Judul</td>
							<td>
								<input type="text" class="form-control" placeholder="Judul" id="judul" name="judul" >
							</td>
						</tr>
						<tr>
							<td>NIK</td>
							<td>
								<input type="text" class="form-control" placeholder="NIK" id="nik" name="nik" value="<?php echo $this->session->userdata['nik'] ?>" readonly>
							</td>
						</tr>
						<tr>
							<td>Jenis Pengaduan</td>
							<td>
								<select class="form-control" name="jenis" id="jenis">
									<?php foreach ($jenis as $key => $value) {?>
										<option value="<?php echo $value['id'] ?>"><?php echo $value['jenis_pengaduan'] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Tujuan Instansi</td>
							<td>
								<select class="form-control" name="instansi" id="instansi">
									<?php foreach ($instansi as $key => $value1) {?>
										<option value="<?php echo $value1['id'] ?>"><?php echo $value1['nama_instansi'] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kota / Kabupaten tujuan</td>
							<td>
								<select class="form-control" name="kota" id="kota">
									<?php foreach ($kota as $key => $value2) {?>
										<option value="<?php echo $value2['id'] ?>"><?php echo $value2['kota'] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Foto</td>
							<td>
							<input type="file" class="form-control" placeholder="Foto" id="berkas" name="berkas" accept="image">
							</td>
						</tr>
						<tr>
							<td>Isi Laporan</td>
							<td>
								<textarea type="text" class="form-control" placeholder="Isi Laporan" id="isi" name="isi"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button class="btn btn-info" type="submit">Simpan</button>
								<a href="<?php echo base_url('Pengaduan'); ?>"><button class="btn btn-danger">Batal</button></a>
							</td>
						</tr>
					</table>
				</form>
		    </div>
				<?php echo form_close(); ?>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Rakyat/js'); ?>
</html>