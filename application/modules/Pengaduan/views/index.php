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
		      <table class="table" width="100%">
					<tr>
						<td><a href="<?php echo base_url('Pengaduan/tambah'); ?>"><button class="btn btn-info">Tambah Data</button></td>
					</tr>
				</table>
		      <div class="container">
		        <table id="table" class="table" border="1" cellspacing="0" width="100%">
		                <tr>
		                	<th width="5%">No</th>
		                	<th width="30%">Foto</th>
		                	<th width="15%">Tanggal Pengaduan</th>
		                	<th width="15%">Judul</th>
		                	<th width="15%">NIK</th>
		                	<th width="25%">Isi Laporan</th>
		                	<th width="10%">Status</th>
		                </tr>
		            	<?php $no=1; ?>
		            	<?php foreach ($pengaduan as $key => $value) {?>
		            	<tr>
		            		<td><?php echo $no++ ?></td>
		            		<td><img src="<?php echo base_url(); ?>upload/<?php echo $value['nama_berkas'] ?>" width="100px" height="100px"></td>
		            		<td><?php echo date("d-m-Y", strtotime($value['tanggal'])); ?></td>
		            		<td><?php echo $value['judul'] ?></td>
		            		<td><?php echo $value['nik'] ?></td>
		            		<td><?php echo $value['isi'] ?></td>
		            		<td><?php echo $value['proses'] ?></td>
		            	</tr>
		            <?php } ?>
		        </table>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Rakyat/js'); ?>
</html>