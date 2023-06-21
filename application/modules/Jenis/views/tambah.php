<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Admin/header'); ?>
</head>
<body>
	<?php $this->load->view('Admin/navbar'); ?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('Admin/side'); ?>
			<main class="col-md-9 ms-sm-auto col-lg-8 px-md-1">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		        <h1 class="h2">Jenis Pengaduan</h1>
		      </div>
		      <div class="container">
		        <form action="<?php echo base_url(). 'Jenis/tambah_aksi'; ?>" method="post">
					<table class="table" width="100" align="center">
						<tr>
							<td width="25%">Nama Jenis Pengaduan</td>
							<td>
								<input type="text" class="form-control" placeholder="Nama Jenis Pengaduan" id="nama_jenis" name="nama_jenis" value="<?= set_value('nama_jenis'); ?>">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button class="btn btn-primary" type="submit">Submit</button>
								<a href="<?php echo base_url('Jenis'); ?>" class="btn btn-danger" >Batal</a>
							</td>
						</tr>
					</table>
				</form>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Admin/js'); ?>
</html>