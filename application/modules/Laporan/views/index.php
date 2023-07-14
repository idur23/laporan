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

		        Form Filter by Tanggal
		        <br><br><hr>
		        <form action="<?php echo base_url(). 'Laporan/filter'; ?>" method="post" target='_blank'>

		        	<input type="hidden" name="nilaifilter" value="1">

		        	Tanggal Awal <br>
		        	<input type="date" name="tanggalawal" required=""><br>
		        	Tanggal Akhir <br>
		        	<input type="date" name="tanggalakhir" required=""><br>
		        	<br>
		        	<input type="submit" value="Print">
		        </form>

		        <br><hr><br>

		        Form Filter by Bulan
		        <br><br><hr>
		        <form action="<?php echo base_url(). 'Laporan/filter'; ?>" method="post" target='_blank'>

		        	<input type="hidden" name="nilaifilter" value="2">

		        	Pilih Tahun
		        	<select name="tahun1" required="">
		        		<?php foreach ($tahun as $key => $value) {?>
		        			<option value="<?php echo $value->tahun ?>"><?php echo $value->tahun ?></option>
		        		<?php } ?>
		        	</select>

		        	Bulan Awal <br>
		        	<select name="bulanawal" required="">
		        		<option value="1">Januari</option>
		        		<option value="2">Februari</option>
		        		<option value="3">Maret</option>
		        		<option value="4">April</option>
		        		<option value="5">Mei</option>
		        		<option value="6">Juni</option>
		        		<option value="7">Juli</option>
		        		<option value="8">Agustus</option>
		        		<option value="9">September</option>
		        		<option value="10">Oktober</option>
		        		<option value="11">November</option>
		        		<option value="12">Desember</option>
		        	</select><br>
		        	Bulan Akhir <br>
		        	<select name="bulanakhir" required="">
		        		<option value="1">Januari</option>
		        		<option value="2">Februari</option>
		        		<option value="3">Maret</option>
		        		<option value="4">April</option>
		        		<option value="5">Mei</option>
		        		<option value="6">Juni</option>
		        		<option value="7">Juli</option>
		        		<option value="8">Agustus</option>
		        		<option value="9">September</option>
		        		<option value="10">Oktober</option>
		        		<option value="11">November</option>
		        		<option value="12">Desember</option>
		        	</select><br>
		        	<br>
		        	<input type="submit" value="Print">
		        </form>

		        <br><hr><br>

		        Form Filter by Bulan
		        <br><br><hr>
		        <form action="<?php echo base_url(). 'Laporan/filter'; ?>" method="post" target='_blank'>

		        	<input type="hidden" name="nilaifilter" value="3">
		        	
		        	Pilih Tahun
		        	<select name="tahun2" required="">
		        		<?php foreach ($tahun as $key => $value) {?>
		        			<option value="<?php echo $value->tahun ?>"><?php echo $value->tahun ?></option>
		        		<?php } ?>
		        	</select><br>

		        	<input type="submit" value="Print">
		        </form>
		        
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Admin/js'); ?>
</html>