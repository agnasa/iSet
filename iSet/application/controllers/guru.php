<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Guru extends CI_Controller{
		
		public function index()
		{
			$this->home();
		}
		
		public function home()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				$this->profile();
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function profile()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getProfile($nis);
				$this->load->view('guru/profile', $data);
			}
			else 
			{
				redirect('login/restricted');
			}

		}
		
		public function profile_edit()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getProfile($nis);
				$this->load->view('guru/profile_edit', $data);
			}
			else 
			{
				redirect('login/restricted');
			}

		}
		
		public function manage_score()
		{
			if($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru')
			{
				/*$this->load->model('model_users');
				$jml = $this->db->get('nilai');
				//pagination
				$config['base_url'] = base_url().'guru/manage_score';
				$config['total_rows'] = $jml->num_rows();
				$config['per_page'] = '5';
				$config['first_page'] = 'Awal';
				$config['last_page'] = 'Akhir';
				$config['next_page'] = '&laquo';
				$config['prev_page'] = '&raquo';
				
				$this->pagination->initialize($config);
				$data['halaman'] = $this->pagination->create_links();
				$data['query'] = $this->model_users->getscore();
				$this->load->view('manage_score', $data);*/
				
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getscore();
				$this->load->view('man_score', $data);
			}
			else
			{
				redirect('login/restricted');
			}
		} 
		
		//update
		public function update_profile()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getProfile($nis);
				if($this->model_users->updateUser($nis))
				{
					redirect('guru/profile_edit');
				}
				else
				{
					redirect('guru/profile_edit');
				}
			}
			else 
			{
				redirect('login/restricted');
			}
		}
		
		//update nilai
		public function update_score()
		{
			echo "updt";
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				echo "masuk if 1";
				$nis = $this->session->userdata('nis');
				$this->load->model('model_users');
				$data['results'] = $this->model_users->get_score($nis);
				if($this->model_users->updateScore($nis))
				{
					echo "did it";
					redirect('guru/manage_score');
				}
				else
				{
					echo "fail";
					redirect('guru/manage_score');
				}
			}
			else 
			{
				redirect('login/restricted');
			}
		}
		
		//del siswa
		public function del_siswa($nis)
		{
			echo "delsiswa";
			$where= array('nis'=>$nis);
			$this->load->model('model_users');
			$res=$this->model_users->del_siswa('nilai',$where);
			if($res>=1)
			{
				redirect('guru/manage_score');
			}
		}
		
		//add siswa
		public function add_siswa()
		{
		}
		
		//upload
		public function upload()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				$this->load->model('model_users');
				$data['results'] = $this->model_users->getfile();
				$this->load->view('upload', $data);
			} 
			else 
			{
				redirect('login/restricted');
			}
			
		}
		
		//materi
		public function openMateri($nama)
		{
			echo base_url("assets/img/gallery/".$nama.".swf");
		}
		
		public function do_upload()
		{
			$this->load->model('model_users');
			$data['results'] = $this->model_users->getfile();
				
			$config = array(
				'upload_path' => "./assets/upload/",
				'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
				'overwrite' => TRUE,
				'max_size' => "2048000",
			);
			
			$dir = "./assets/upload/";
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload())
			{
				$data = array(
					'upload_data' => $this->upload->data()
				);
				//$file = $data['upload_data']['file_name'];
				$fileName = $_FILES['userfile']['name']; 
				//$this->load->model('model_users');
				//$this->model_users->add_file($fileName);
				$query = "INSERT INTO upload (id_upload, nama) VALUES (NULL, '$fileName')";
				mysql_query($query);
				
				//$this->load->view('upload', $data);
				$this->upload();
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
			}
			
		}
		
		public function del_file($namafile)
		{
			$where= array('nama'=>$namafile);
			$this->load->model('model_users');
			$res=$this->model_users->delfile('upload',$where);
			if($res>=1)
			{
				redirect('guru/upload');
			}
		}
		
		public function download($namafile)
		{
			$this->load->helper('download');
			$data = file_get_contents(base_url("./assets/upload/$namafile"));
			$name = $this->uri->segment(3);
			force_download($name, $data);
		}
		
		public function materi()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				$this->load->view('materi_guru');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function start_practicum()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				
				$this->load->view('mulai');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
		
		public function schedule()
		{
			if ($this->session->userdata('is_logged_in') && $this->session->userdata('role')=='Guru') 
			{
				
				$this->load->view('schedule');
			} 
			else 
			{
				redirect('login/restricted');
			}
		}
	}

?>