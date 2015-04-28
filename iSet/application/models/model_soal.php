<?php

class Model_soal extends CI_Model {

	public function get_soal($id_modul,$id_pelajaran)
	{
		$contain	='select * from soal_pg where id_modul=? and id_pelajaran=?';
		$query 		= $this->db->query($contain,array($id_modul,$id_pelajaran)); 
		return $query->result();
	}
	
	/*public function getsoal()
	{
		$contain	='select * from soal_pg';
		$query 		= $this->db->query(); 
		return $query->result();
	}*/
	
	public function get_jawaban($id_modul,$id_pelajaran,$nomer_soal)
	{
		$contain	='select jawaban from soal_pg where id_modul=? and id_pelajaran=? and nomer_soal=?';
		$query 		= $this->db->query($contain,array($id_modul,$id_pelajaran,$nomer_soal)); 
		return $query->result();
	}

}