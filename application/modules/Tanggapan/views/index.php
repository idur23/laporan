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
		        <h1 class="h2">Tanggapan</h1>
		      </div>
		      <div class="container">
		        <table id="table" class="table" border="1" cellspacing="0" width="100%">
		        	<thead>
		                <tr>
		                	<th>No</th>
		                	<th>Foto</th>
		                	<th>Tanggal</th>
		                	<th>Jenis Pengaduan</th>
		                	<th>Judul Pengaduan</th>
		                	<th>Isi Tanggapan</th>
		                </tr>
		            </thead>
		            	<?php $no=1; ?>
	            		<?php foreach ($tanggap as $key => $value) {?>
		            	<tr>
		            		<td><?php echo $no++ ?></td>
		            		<td><img src="<?php echo base_url(); ?>upload/<?php echo $value['nama_berkas'] ?>" width="100px" height="150px"></td>
		            		<td><?php echo date("d-m-Y", strtotime($value['tanggal_tanggapan'])); ?></td>
		            		<td><?php echo $value['jenis_pengaduan'] ?></td>
		            		<td><?php echo $value['judul'] ?></td>
		            		<td><?php echo $value['tanggapan'] ?></td>
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