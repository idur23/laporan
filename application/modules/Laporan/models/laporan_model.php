<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class laporan_model extends MY_loader
{
	
	function gettahun()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_tanggapan) AS tahun 
			FROM penanggapan 
			JOIN pengaduan 
			ON ".'penanggapan.id_pengaduan'." ".'='." ".'pengaduan.id'."
			GROUP BY YEAR(tanggal_tanggapan)
			ORDER BY YEAR(tanggal_tanggapan) ASC
			");

		return $query->result();
	}
	function filterbytanggal($tanggalawal,$tanggalakhir,$jenis)
	{
		$query = $this->db->query("SELECT * FROM penanggapan 
			JOIN pengaduan 
			ON ".'penanggapan.id_pengaduan'." ".'='." ".'pengaduan.id'."
			JOIN user
			ON ".'pengaduan.nik'." ".'='." ".'user.nik'."
			JOIN jenis
			ON ".'pengaduan.id_jenis'." ".'='." ".'jenis.id'."
			JOIN kota
			ON ".'pengaduan.id_kota'." ".'='." ".'kota.id'."
			JOIN instansi
			ON ".'pengaduan.id_instansi'." ".'='." ".'instansi.id'."
			WHERE id_jenis = '$jenis' AND tanggal_tanggapan BETWEEN '$tanggalawal' AND '$tanggalakhir'
			ORDER BY tanggal_tanggapan ASC
			");

		return $query->result();
	}
	function filterbybulan($tahun1,$bulanawal,$bulanakhir)
	{
		$query = $this->db->query("SELECT * FROM penanggapan 
			JOIN pengaduan 
			ON ".'penanggapan.id_pengaduan'." ".'='." ".'pengaduan.id'."
			WHERE YEAR(tanggal_tanggapan) = '$tahun1'
			AND MONTH(tanggal_tanggapan)
			BETWEEN '$bulanawal' AND '$bulanakhir'
			ORDER BY tanggal_tanggapan ASC
			");

		return $query->result();
	}
	function filterbytahun($tahun2)
	{
		$query = $this->db->query("SELECT * FROM penanggapan 
			JOIN pengaduan 
			ON ".'penanggapan.id_pengaduan'." ".'='." ".'pengaduan.id'."
			WHERE YEAR(tanggal_tanggapan) = '$tahun2'
			ORDER BY tanggal_tanggapan ASC
			");

		return $query->result();
	}

}

?>