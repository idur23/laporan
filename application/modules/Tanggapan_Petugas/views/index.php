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
		        <h1 class="h2">Tanggapan</h1>
		      </div>
		      <div class="container">
		        <table id="table" class="table" border="1" cellspacing="0" width="100%">
		                <tr>
		                	<th>No</th>
		                	<th>Tanggal</th>
		                	<th>Judul Pengaduan</th>
		                	<th>Isi Tanggapan</th>
		                	<th>Aksi</th>
		                </tr>
		            	<?php $no=1; ?>
	            		<?php foreach ($tanggap as $key => $val) {?>
		            	<tr>
		            		<td><?php echo $no++ ?></td>
		            		<td><?php echo date("d-m-Y", strtotime($val['tanggal_tanggapan'])); ?></td>
		            		<td><?php echo $val['judul'] ?></td>
		            		<td><?php echo $val['tanggapan'] ?></td>
		            		<td>
								<a href="<?php echo base_url('tanggapan_petugas/edit/'.$val['id_tanggapan']); ?>"><button class="btn btn-info">More</button></a>
								<a href="<?php echo base_url('tanggapan_petugas/hapus/'.$val['id_tanggapan']); ?>"><button class="btn btn-danger">Hapus</button></a>
							</td>
		            	</tr>
		            <?php } ?>
		        </table>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Petugas/js'); ?>
</html>