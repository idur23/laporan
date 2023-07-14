<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class pengaduan_model extends MY_loader
{
	
	function ambil_data()
	{
		$this->db->select('*');
		$this->db->from('pengaduan');

		return $this->db->get();
	}
	function ambil()
	{
		$this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->join('jenis','jenis.idj=pengaduan.id_jenis');
		$this->db->order_by('id','desc');
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
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function get_by_id($id)
	{
		$this->db->get_where('pengaduan',array('id'=>$id))->row();
	}
	function jumlah()
	{
		$query = $this->db->get('pengaduan');
		$jumlah = $query->num_rows();
		return $jumlah;
	}
}

?>