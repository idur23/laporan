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
		        <h1 class="h2">Laporan Pengaduan</h1>
		      </div>
		      <div class="container">
		        <br><hr>
		        <form action="<?php echo base_url(). 'Laporan/filter'; ?>" method="post" target='_blank'>

		        	<label> Jenis Pengaduan </label><br>
		        	<select class="form-control" name="jenis" id="jenis" required="">
						<?php foreach ($jenis as $key => $value) {?>
							<option value="<?php echo $value['idj'] ?>"><?php echo $value['jenis_pengaduan'] ?></option>
						<?php } ?>
					</select>
		        	<input type="hidden" name="nilaifilter" value="1">

		        	<label> Tanggal Awal </label><br>
		        	<input type="date" name="tanggalawal" required="" class="form-control"><br>
		        	<label> Tanggal Akhir </label><br>
		        	<input type="date" name="tanggalakhir" required="" class="form-control"><br>
		        	<br>
		        	<input type="submit" value="Print" class="btn btn-info">
		        </form>
		    </div>
		    
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Admin/js'); ?>
</html>