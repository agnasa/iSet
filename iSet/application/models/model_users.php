<?php
	class Model_users extends CI_Model{
	
		public function can_log_in()
		{
			$this->db->where('nis', $this->input->post('username'));
			$this->db->where('password', md5(($this->input->post('password'))));
			$query = $this->db->get('user'); //nama tabel di database
			
			if ($query->num_rows() == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function getRole($username)
		{
			$this->db->where('nis', $username);
			$query = $this->db->get('user');
			foreach($query->result() as $row)
			{
				return $row->role;
			}
 		}

 		public function getProfile($nis)
		{
			$contain = 'SELECT * FROM user WHERE nis=?';
			$query = $this->db->query($contain, array($nis));
			return $query->result();
		}
		
		public function getMurid()
		{
			$data = $this->db->query('select * from user');
			return $data->result_array();
		}
		
		public function cek_user($data)
		{
			$query = $this->db->get_where('user', $data);
			return $query;
		}

		public function updateUser($nis)
		{
			$data = array(
					'nama' => $this->input->post('nama'),
					'tempat' => $this->input->post('tempat'),
					'tanggal' => $this->input->post('tanggal'),
					'kelas' => $this->input->post('kelas'),
					'email' => $this->input->post('email'),
					'notelp' => $this->input->post('notelp'),
					'alamat' => $this->input->post('alamat'),
					'moto' => $this->input->post('moto'),
				);
			$this->db->where('nis', $nis);
			$this->db->update('user', $data);
		}
		
		public function get_score($nis)
		{
			$this->db->select('*');
			$this->db->from('nilai');
			$this->db->where('nis', $nis);
			$query = $this->db->get();
			return $query->result_array();
		}
		
		public function getscore()
		{
			$data = $this->db->get('nilai');
			return $data->result_array();
		}
		
		public function getfile()
		{
			$data = $this->db->get('upload');
			return $data->result_array();
		}
		
		public function updateScore($nis)
		{
			echo "updateScore";
			$data = array(
					'score' => $this->input->post('score'),
					'kode_mp' => $this->input->post('kode_mp'),
					'modul' => $this->input->post('modul'),
				);
			$this->db->where('nis', $nis);
			$this->db->update('nilai', $data);
		}
		
		public function del_siswa($tabelname,$where)
		{
			$res=$this->db->delete($tabelname,$where);
			return $res;
		}
		
		public function delfile($tabelname,$where)
		{
			$res=$this->db->delete($tabelname,$where);
			return $res;
		}
		
		public function add_file($file)
		{
			/*$data = array(
				'nama' => $this->input->post('userfile'),
			);*/
			//$query = "INSERT INTO upload (id_upload, nama) VALUES (NULL, $file)"
			$this->db->insert('upload', $file);
			//mysql_query($query);
		}
	}
?>