<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Petugas/header'); ?>
</head>
<body>
	<?php $this->load->view('Petugas/navbar'); ?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('Petugas/side'); ?>
			<main class="col-md-9 ms-sm-auto col-lg-8 px-md-1">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		        <h1 class="h2">Verifikasi & Validasi</h1>
		      </div>
		      <?php
					if (isset($error)) {
						echo "ERROR UPLOAD : <br/>";
						print_r($error);
						echo "<hr/>";
					}
				?>
		      <div class="container">
		      	<?php foreach ($pengaduan as $key => $value) {?>
				<?php echo form_open_multipart('Verifikasi_Petugas/upload_edit/'); ?>
		        <form action="" enctype="multipart/form-data" method="post">
					<table class="table" width="100" align="center">
						<tr>
							<td>Judul</td>
							<td>
								<input type="hidden" name="id" id="id" value="<?php echo $value->id ?>">
								<input type="text" readonly class="form-control" placeholder="Judul" id="judul" name="judul" value="<?php echo $value->judul ?>">
							</td>
						</tr>
						<tr>
							<td>NIK</td>
							<td>
								<input type="text" class="form-control" placeholder="NIK" id="nik" name="nik" value="<?php echo $value->nik ?>" readonly >
							</td>
						</tr>
						<tr>
							<td>Foto</td>
							<td>
								<img src="<?php echo base_url(); ?>upload/<?php echo $value->nama_berkas ?>" name="berkas" width="100px" height="100px">
								<input type="hidden" name="old" value="<?php echo $value->nama_berkas ?>">
							</td>
						</tr>
						<tr>
							<td>Isi Laporan</td>
							<td>
								<textarea type="text" class="form-control" placeholder="Isi Laporan" id="isi" name="isi" readonly><?php echo $value->isi ?></textarea>
							</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>
								<select class="form-control" name="status" id="status">
									<option value="Proses">Proses</option>
									<option value="Selesai">Selesai</option>
								</select>
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
			<?php } ?>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Petugas/js'); ?>
</html>