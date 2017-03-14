<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	class Homepage extends CI_Controller { 
	
		public function __construct() { 
			parent::__construct(); 
			
			$this->load->model('m_homepage');
			$this->load->library('session');
			$this->load->helper(array('captcha','url'));
		}
		
		function index(){
			$this->load->model('m_homepage');
			
			$data['ft'] = $this->m_homepage->YMCS();
			$data['keyslide'] = $this->m_homepage->keyslide();
			$data['slide'] = $this->m_homepage->slide();
			$data['new3'] = $this->m_homepage->new3();
			$this->load->view('homepage/index.php', $data);
		}
		
		function Allproduk() {
			$this->load->model('m_homepage');
			
			$data['ft'] = $this->m_homepage->YMCS();
			$data['all'] = $this->m_homepage->allproduk();
			$this->load->view('homepage/all_produk', $data);
		}
		
		function Detailproduk($id) {
			$this->load->model('m_homepage');
			
			$data['ft'] = $this->m_homepage->YMCS();
			$data['detail'] = $this->m_homepage->detailproduk($id);
			$this->load->view('homepage/detail_produk', $data);
		}
		
		function inginMemesan() {
			$data['ft'] = $this->m_homepage->YMCS();
			$this->load->view('homepage/loginform.php', $data);
		}
		
		function mendaftar() {
			if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha'))) {
				$nama=$this->input->post('nama');
				$uname=$this->input->post('uname');
				$mail=$this->input->post('mail');
				$pwd=$this->input->post('pwd');
				$nohp=$this->input->post('nohp');
				$alamat=$this->input->post('alamat');
				
				$data=array(
					'nama'=> $nama,
					'username'=> $uname,
					'email'=> $mail,
					'password'=> $pwd,
					'nohp'=> $nohp,
					'alamat'=> $alamat,
					'level'=> 'user',
					'status'=> 1
				);
				$this->db->insert('user',$data);
				$data['ft'] = $this->m_homepage->YMCS();
				$this->load->view('homepage/registrasi_sukses.php',$data);
			} else {
				// load codeigniter captcha helper
				$this->load->helper('captcha');
	 
				$vals = array(
					'img_path'	 => './captcha/',
					'img_url'	 => base_url().'captcha/',
					'img_width'	 => '200',
					'img_height' => 30,
					'border' => 0, 
					'expiration' => 7200
				);
	 
				// create captcha image
				$cap = create_captcha($vals);
	 
				// store image html code in a variable
				$data['image'] = $cap['image'];
				$data['ft'] = $this->m_homepage->YMCS();
	 
				// store the captcha word in a session
				$this->session->set_userdata('mycaptcha', $cap['word']);
				
				$this->load->view('homepage/registrasiform.php', $data);
			}
		}
		
		#kontak		
		function kontak() {
			if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha'))) {
				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$nohp = $this->input->post('nohp');
				$subjek = $this->input->post('subjek');
				$isi = $this->input->post('isi');

				$insert = $this->db->insert('kontak',array(
					'nama' => $nama,
					'email' => $email,
					'nohp' => $nohp,
					'subjek' => $subjek,
					'isi' => $isi
				));
				$data['ft'] = $this->m_homepage->YMCS();
				$this->load->view('homepage/kontak_sukses.php',$data);
			} else {
				// load codeigniter captcha helper
				$this->load->helper('captcha');
	 
				$vals = array(
					'img_path'	 => './captcha/',
					'img_url'	 => base_url().'captcha/',
					'img_width'	 => '200',
					'img_height' => 30,
					'border' => 0, 
					'expiration' => 7200
				);
	 
				// create captcha image
				$cap = create_captcha($vals);
	 
				// store image html code in a variable
				$data['image'] = $cap['image'];
				$data['ft'] = $this->m_homepage->YMCS();
	 
				// store the captcha word in a session
				$this->session->set_userdata('mycaptcha', $cap['word']);
				
				$this->load->view('homepage/kontakform.php', $data);
			}
		}
		
		function YM() {
			$this->load->model('m_homepage');
			
			$data['ft'] = $this->m_homepage->YMCS();
			$this->load->view('homepage/footer', $data);
		}
	}
?>