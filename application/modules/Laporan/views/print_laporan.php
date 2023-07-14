<!DOCTYPE html>
<html>
<head>
	<title>Print Laporan</title>
</head>
<body onload="window.print()">
	<center>
		<h1><?php echo $title ?></h1>
		<h2><?php echo $subtitle ?></h2>
	</center>
		<?php $no=1 ; foreach ($datafilter as $key => $value) :?>
			<table id="table" class="table" border="1" cellspacing="0" width="100%">
					<tr>
						<th width="20%">Judul Pengaduan</th>
						<td><?php echo $value->judul ;?></td>
					</tr>
					<tr>
						<th width="20%">Tanggal Pengaduan</th>
						<td><?php echo date("d-m-Y", strtotime($value->tanggal)); ?></td>
					</tr>
					<tr>
						<th width="20%">Nama Pengadu</th>
						<td>
							<?php echo $value->fullname; ?>
						</td>
					</tr>
					<tr>
						<th width="20%">NIK Pengadu</th>
						<td><?php echo $value->nik; ?></td>
					</tr>
					<tr>
						<th width="20%">Gambar Pengaduan</th>
						<td>
							<img class="img-fluid" src="<?php echo base_url(); ?>upload/<?php echo $value->berkas; ?>"width="200px" height="200px">
						</td>
					</tr>
					<tr>
						<th width="20%">Jenis Pengaduan</th>
						<td>
							<?php echo $value->jenis_pengaduan; ?>
						</td>
					</tr>
					<tr>
						<th width="20%">Isi Pengaduan</th>
						<td>
							<?php echo $value->isi; ?>
						</td>
					</tr>
					<tr>
						<th width="20%">Tanggal Tanggapan</th>
						<td><?php echo date("d-m-Y", strtotime($value->tanggal_tanggapan)); ?></td>
					</tr>
					<tr>
						<th width="20%">Isi tanggapan</th>
						<td>
							<?php echo $value->tanggapan; ?>
						</td>
					</tr>
			</table><br><br>
		<?php endforeach ?>
	
</body>
</html>