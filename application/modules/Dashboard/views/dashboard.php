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
		        <h1 class="h2">Dashboard</h1>
		      </div>
		      <div class="container">
		      	<div class="row">
		      		
	        		<div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="<?php echo base_url('Tambah_Petugas') ?>">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Petugas</div>
                                        </a>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_petugas?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	        		<div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="<?php echo base_url('jenis') ?>">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Jenis Pengaduan</div>
                                        </a>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_jenis?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	        		<div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="<?php echo base_url('Verifikasi_Admin') ?>">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Pengaduan</div>
                                        </a>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_pengaduan?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		      	</div>
		      	<div class="row">
		      		
	        		<div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="<?php echo base_url('Dashboard') ?>">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah User</div>
                                        </a>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_rakyat?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	        		<div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="<?php echo base_url('Tanggapan_admin') ?>">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah tanggapan</div>
                                        </a>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_tanggapan?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		      	</div>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Admin/js'); ?>
</html>
