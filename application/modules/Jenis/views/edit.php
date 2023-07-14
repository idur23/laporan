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
		        <h1 class="h2">Kota / Kabupaten</h1>
		      </div>
		      <div class="container">
		        <?php foreach ($jenis as $key => $value) {
		        ?>
		        <form action="<?php echo base_url(). 'Jenis/update'; ?>" method="post">
					<table class="table" width="100" align="center">
						<tr>
							<td>Jenis Pengaduan</td>
							<td>
								<input type="hidden" name="id" value="<?php echo $value->id ?>">
								<input type="text" class="form-control" placeholder="Jenis Pengaduan" id="jenis" name="jenis" value="<?php echo $value->jenis_pengaduan ?>">
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
			<?php } ?>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Admin/js'); ?>
</html>