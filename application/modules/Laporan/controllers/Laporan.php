<?php
class Laporan extends MX_Controller {
	function __construct()
	{
		parent::__construct();
		{
			$this->load->model(array(
				'laporan_model'				=> 'laporan',
				'Jenis/jenis_model'			=> 'jenis',
				// 'genre/model_genre'	=> 'genre',
				// 'jenis/model_jenis'	=> 'jenis',
				// 'judul/model_judul'	=> 'judul',
				// 'komik/model_komik'	=> 'komik',
			));
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
		}
	}
	function index()
	{
		$data['tahun'] = $this->laporan->gettahun();
		$data['jenis'] = $this->jenis->ambil_data()->result_array();
		$this->load->view('home',$data);
	}
	function filter()
	{
		$jenis = $this->input->post('jenis');
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');

		if ($nilaifilter == 1) {
			$data['title'] = "Laporan Pengaduan";
			$data['subtitle'] = "Dari Tanggal : ".date('d-m-Y',strtotime($tanggalawal)) ." Sampai Tanggal : ".date('d-m-Y',strtotime($tanggalakhir));
			$data['datafilter'] = $this->laporan->filterbytanggal($tanggalawal,$tanggalakhir,$jenis);

			$this->load->view('print_laporan', $data);
			// print_r($data); 
		}else if ($nilaifilter == 2) {
			$data['title'] = "Laporan Pengaduan by Bulan";
			$data['subtitle'] = "Dari Bulan : ".$bulanawal." Sampai Bulan : ".$bulanakhir." Tahun : ".$tahun1;
			$data['datafilter'] = $this->laporan->filterbybulan($tahun1,$bulanawal,$bulanakhir);

			$this->load->view('print_laporan', $data);
		}else if ($nilaifilter == 3) {
			$data['title'] = "Laporan Pengaduan by Tahun";
			$data['subtitle'] = "Tahun : ".$tahun2;
			$data['datafilter'] = $this->laporan->filterbytahun($tahun2);

			$this->load->view('print_laporan', $data);
		}
	}
}
?>