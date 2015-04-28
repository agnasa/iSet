<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Murid extends CI_Controller{
		
		public function index()
		{
			if ($this->session->userdata('is_logged_in')) {
				$this->home();
			} else {
				redirect('login/restricted');
			}
			
		}
		
		public function home()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->profile();
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function score()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->view('show_score');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function profile_edit()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getProfile($nis);
				$this->load->view('murid/profile_edit', $data);
			
			}
			else 
			{
				redirect('login/restricted');
			}

		}
		
		public function profile()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getProfile($nis);
				$this->load->view('murid/profile', $data);
			}
			else 
			{
				redirect('login/restricted');
			}

		}
		
		public function optik()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->view('murid/alat_optik');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}

		public function kimia()
		{
			if ($this->session->userdata('is_logged_in')) 
			{
				$this->load->view('murid/kimia');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function biologi()
		{
			if ($this->session->userdata('is_logged_in')) 
			{
				$this->load->view('murid/biologi');
			}
			else 
			{
				redirect('login/restricted');
			}
		}

		public function schedule()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->view('murid/schedule');
			}
			else 
			{
				redirect('login/restricted');
			}
		}


		//create
		public function insert()
		{

		}

		//retrieve
		public function display()
		{
			
		}

		//update
		public function update_profile()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getProfile($nis);
				if($this->model_users->updateUser($nis))
				{
					redirect('murid/profile_edit');
				}
				else
				{
					redirect('murid/profile_edit');
				}
			}
			else 
			{
				redirect('login/restricted');
			}
		}

		//delete
		public function delete()
		{
			
		}
		
		public function materi()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->view('materi_siswa');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function download_materi()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getfile();
				$this->load->view('download', $data);
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function download($namafile)
		{
			$this->load->helper('download');
			$data = file_get_contents(base_url("./assets/upload/$namafile"));
			$name = $this->uri->segment(3);
			force_download($name, $data);
		}
		
		public function viewsoal($id_modul, $id_pelajaran)
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->model('model_soal');
				$data['results'] = $this->model_soal->get_soal($id_modul, $id_pelajaran);
				$this->load->view('soal', $data);
				
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function cek()
		{
			$this->view();
		}
		
		public function start()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$this->load->view('mulai');
			}
			else
			{
				redirect('login/restricted');
			}
		}
		
		public function cekJawaban()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Murid') 
			{
				$jumlah_benar = 0;
				$id_modul = $this->input->post('id_modul');
				$id_pelajaran = $this->input->post('id_pelajaran');
				$jumlah = $this->input->post('jumlah')-1;
				$this->load->model('model_soal');
				
				for($i=1; $i<=$jumlah; $i++)
				{
					$j_peserta = $this->input->post($i);
					$j_benar = $this->model_soal->get_jawaban($id_modul, $id_pelajaran, $i);
					
					foreach($j_benar as $row):
						$j_benar = $row->jawaban;
					endforeach;
					
					if($j_peserta == $j_benar)
					{
						$jumlah_benar++;
					}
				}
				
				$data = array(
					'benar' => $jumlah_benar,
					'total' => $jumlah,
				);
				
				$this->load->view('hasil', $data);
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
	}

?>