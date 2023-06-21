<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class verifikasi_petugas_model extends MY_loader
{
	
	function ambil_data()
	{
		return $this->db->get('pengaduan');
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
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table, $data);
	}
	function get_by_id($id)
	{
		$this->db->get_where('pengaduan',array('id'=>$id))->row();
	}
}

?>