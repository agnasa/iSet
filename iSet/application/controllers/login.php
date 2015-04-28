<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller{
		
		public function login_validation()
		{
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username','username','trim|xss_clear|callback_validate_credentials');
			$this->form_validation->set_rules('password','Password','md5|trim');
			
			if ($this->form_validation->run()) 
			{
				$data=array(
					'nis' => $this->input->post('username', TRUE),
					
				);
				$this->load->model('model_users'); //load model/model_users.php
				$hasil = $this->model_users->cek_user($data);
				echo $hasil->num_rows();
				if($hasil->num_rows() == 1)
				{
					echo "masuk if";
					foreach($hasil->result() as $sess)
					{
						$sess_data['nis'] = $sess->nis;
						$sess_dara['password'] = $sess->password;
						$sess_data['nama'] = $sess->nama;
						$sess_data['role'] = $sess->role;
						$sess_data['email'] = $sess->email;
						$sess_data['tempat'] = $sess->tempat;
						$sess_data['tanggal'] = $sess->tanggal;
						$sess_data['kelas'] = $sess->kelas;
						$sess_data['notelp'] = $sess->notelp;
						$sess_data['alamat'] = $sess->alamat;
						$sess_data['jenis_kelamin'] = $sess->jenis_kelamin;
						$sess_data['moto'] = $sess->moto;
						$sess_data['is_logged_in'] 	= 1;
						$this->session->set_userdata($sess_data);
					}
					
					if($this->session->userdata('role') == 'Guru')
					{
						redirect('guru');
					}
					else if($this->session->userdata('role') == 'Murid')
					{
						redirect('murid');
					}
				}
			} 
			else
			{
				$this->load->view('login_new');
			}
		}
		
		public function validate_credentials()
		{
			$this->load->model('model_users');
			
			if($this->model_users->can_log_in())
			{	
				return true;
			}
			else
			{
				$this->form_validation->set_message('validate_credentials', '');
				return false;
			}
		}

		//-------------------------restricted-------------------------------
		public function restricted(){
			$this->load->view('restricted');
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('main');
		}
		
	}
?>