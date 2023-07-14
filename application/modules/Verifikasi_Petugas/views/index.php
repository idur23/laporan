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
		      <div class="container">
		        <table id="table" class="table" border="1" cellspacing="0" width="100%">
		        	<thead>
		                <tr>
		                	<th width="5%">No</th>
		                	<th width="20%">Foto</th>
		                	<th width="15%">Tanggal Pengaduan</th>
		                	<th width="15%">Jenis Laporan</th>
		                	<th width="15%">Judul</th>
		                	<th width="10%">Status</th>
		                	<th>Aksi</th>
		                </tr>
		            </thead>
		            	<?php $no=1; ?>
		            	<?php foreach ($pengaduan as $key => $value) {?>
		            	<tr>
		            		<td><?php echo $no++ ?></td>
		            		<td><img class="img-fluid" src="<?php echo base_url(); ?>upload/<?php echo $value['berkas'] ?>" width="150px" height="150px"></td>
		            		<td><?php echo date("d-m-Y", strtotime($value['tanggal'])); ?></td>
		            		<td><?php echo $value['jenis_pengaduan'] ?></td>
		            		<td><?php echo $value['judul'] ?></td>
		            		<td><?php echo $value['proses'] ?></td>
		            		<td>
								<?php
								    $status = $value['proses'];
								    if ($status == "belum di proses") {
								        echo '<a href="'.base_url('Verifikasi_Petugas/proses/'.$value['id']).'"><button class="btn btn-info" value="proses">Proses</button></a>';
								    } else if ($status == "proses") {
								        echo '<a href="'.base_url('Verifikasi_Petugas/selesai/'.$value['id']).'"><button class="btn btn-info" value="selesai">Selesai</button></a>';
								    } else if ($status == "selesai") {
								        echo '<button class="btn btn-info" disabled>Selesai</button>';
								    }
								?>
								<a href="<?php echo base_url('Verifikasi_Petugas/hapus_upload/'.$value['id']); ?>"><button class="btn btn-danger">Hapus</button></a>
								<a href="<?php echo base_url('Verifikasi_Petugas/tanggapan/'.$value['id']); ?>"><button class="btn btn-warning">Tanggapan</button></a>
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