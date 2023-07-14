<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class tanggap_model extends MY_loader
{
	
	function ambil_data()
	{
		$this->db->select('*');
		$this->db->from('penanggapan');
		$this->db->join('pengaduan','penanggapan.id_pengaduan=pengaduan.id');
		$this->db->join('jenis','pengaduan.id_jenis=jenis.idj');
		$this->db->order_by('id_tanggapan','desc');
		return $this->db->get();
		
	}
	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table)
	{
		return $this->db->get($table,$where);
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table, $data);
	}
	function get_by_id($id)
	{
		$this->db->get_where('penanggapan',array('id'=>$id))->row();
	}
}

?>