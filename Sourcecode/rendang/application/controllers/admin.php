<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	class Admin extends CI_Controller { 
		var $gallery_path;
		var $gallery_path_url;
		private $datauser;		
		public function __construct() { 
			parent::__construct(); 
			
			$this->gallery_path = realpath(APPPATH . '../assets/uploads/img/');
			$this->gallery_path_url = base_url() . 'assets/uploads/img/';
			if ($this->session->userdata('isLogin') == false){
                redirect('login/login_form');
            }
			$this->load->library('grocery_CRUD');
			$this->load->helper(array('url','html','form')); 
            $this->datauser = $this->session->userdata('data_user');
		}

		##### Terminal Input
		public function _terminal_input($output = null)
		{
			$output->pengguna = $this->datauser;
			$this->load->view('terminal_form.php',$output);
		}
		
		##### Terminal slide
		public function _slide($output = null) {			
			$this->load->model('m_adm');
			
			$output->pengguna = $this->datauser;
			$output->pri = $this->m_adm->show_edit_slide();
			$this->load->view('terminal_slide.php',$output);
		}
		
		##### Terminal Report
		public function _terminal_report($output = null)
		{
			$output->pengguna = $this->datauser;
			$this->load->view('terminal_report.php',$output);
		}
		
		function produk(){
			$crud = new grocery_CRUD();
			$crud->set_table('barang');
			$crud->columns('kode_barang','nama_barang','deskripsi','harga','diskon','stok','pembaharuan','status');
			$crud->display_as('kode_barang','Kode');
			$crud->display_as('nama_barang','Nama');
			$crud->display_as('img','Gambar');
			$crud->display_as('deskripsi','Uraian');
			$crud->display_as('harga','Harga');
			$crud->display_as('diskon','Diskon %');
			$crud->display_as('status_harga','Show/Hide Harga');
			$crud->display_as('stok','Stok');
			$crud->display_as('pembaharuan','Tanggal');
			$crud->display_as('status','Status');
			
			$crud->set_field_upload('img','assets/uploads/produk');
			$crud->set_subject('Produk');
			$output = $crud->render();
			$this->_terminal_input($output);
		}
		

		#Riwayat pesanan
		function pesananKu() {
			$this->load->model('m_adm');
			
			$data['pengguna'] = $this->datauser;
			$data['baru'] = $this->m_adm->pesananBaru();
			$data['dikirim'] = $this->m_adm->pesananDikirim();
			$data['batal'] = $this->m_adm->pesananBatal();
			$data['selesai'] = $this->m_adm->pesananSelesai();
			$this->load->view('pesanan.php', $data);
		}
		
		#Daftar pesanan by admin
		function Allpesanan() {
			$this->load->model('m_adm');
			
			$data['pengguna'] = $this->datauser;
			$data['baru'] = $this->m_adm->AllpesananBaru();
			$data['konfir'] = $this->m_adm->AlllistKonfir();
			$data['dikirim'] = $this->m_adm->AllpesananDikirim();
			$data['batal'] = $this->m_adm->AllpesananBatal();
			$data['selesai'] = $this->m_adm->AllpesananSelesai();
			$this->load->view('allpesananadmin.php', $data);
		}
		
		function Allkonfirmasi() {
			$this->load->model('m_adm');
			
			$data['pengguna'] = $this->datauser;
			$data['konfir'] = $this->m_adm->AlllistKonfir();
			$data['proses'] = $this->m_adm->AllpesananDikirim();
			$this->load->view('Allkonfirmasiadmin.php', $data);
		}
		
		function Proses($id){
			$this->load->model('m_adm');
			if($this->input->post('submit')){
				$this->m_adm->mproses($id);
				redirect('admin/Allpesanan');
			}
		}
		
		function Selesai($id){
			$this->load->model('m_adm');
			if($this->input->post('submit')){
				$this->m_adm->mselesai($id);
				redirect('admin/Allpesanan');
			}
		}
		
		function Batalkan($id){
			$this->load->model('m_adm');
			if($this->input->post('submit')){
				$this->m_adm->batal($id);
				redirect('admin/pesananKu');
			}
		}
		
		function Balikin($id){
			$this->load->model('m_adm');
			if($this->input->post('submit')){
				$this->m_adm->balik($id);
				redirect('admin/pesananKu');
			}
		}
		
		#konfirmasi pesanan
		function listKonfirmasiPesanan() {
			$this->load->model('m_adm');
			
			$data['pengguna'] = $this->datauser;
			$data['bank'] = $this->m_adm->listBank();
			$data['list'] = $this->m_adm->pesananBaru();
			$data['konfir'] = $this->m_adm->listKonfir();
			$this->load->view('konfirmasi_pesanan', $data);
		}
		
		#kontak
		function formkontak() {
			$data['pengguna'] = $this->datauser;
			$this->load->view('kontak', $data);
		}
		
		function kontak() {			
			if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha'))) {
				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$hp = $this->input->post('hp');
				$subjek = $this->input->post('subjek');
				$isi = $this->input->post('isi');
				
				$data['pengguna'] = $this->datauser;
				
				$insert = $this->db->insert('kontak',array(
					'nama' => $nama,
					'email' => $email,
					'nohp' => $hp,
					'subjek' => $subjek,
					'isi' => $isi
				));
				
				$this->load->view('kontak_sukses.php', $data);
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
				$data['pengguna'] = $this->datauser;
	 
				// store the captcha word in a session
				$this->session->set_userdata('mycaptcha', $cap['word']);
				
				$this->load->view('kontak_form.php', $data);
			}
		}
		
		function Allkontakget() {
			$this->load->model('m_adm');
			
			$data['pengguna'] = $this->datauser;
			$data['allkontak'] = $this->m_adm->getallkontak();
			$data['allkritik'] = $this->m_adm->getallkritik();
			$data['allsaran'] = $this->m_adm->getallsaran();
			$data['alltrash'] = $this->m_adm->getalltrash();
			$this->load->view('Allkontak.php', $data);
		}
		
		function MoveKontakToTrash($id){
			$this->load->model('m_adm');
			if($this->input->post('submit')){
				$this->m_adm->ToTrash($id);
				redirect('admin/Allkontakget');
			}
		}
		
		function RestoreTrash($id){
			$this->load->model('m_adm');
			if($this->input->post('submit')){
				$this->m_adm->RestoreTrash($id);
				redirect('admin/Allkontakget');
			}
		}
		
		function DeletePermanenly($id){
			$this->load->model('m_adm');
			$this->m_adm->DeletePermanenly($id);
			redirect('admin/Allkontakget');
		}
		
		function Alluser(){
			$crud = new grocery_CRUD();
			$crud->set_table('user');
			$crud->columns('username','password');
			$crud->where('level','user');			
			
			//menghilangkan field
			$crud->unset_fields('level','foto','nama','alamat','email','nohp','status');
			$crud->change_field_type('password','password');
			
			$output = $crud->render();
			$this->_terminal_input($output);
		}
		
		function Allbank(){
			$crud = new grocery_CRUD();
			$crud->set_table('bank');
			$crud->columns('ANBANK','namaBank','noRekening');
			$crud->display_as('ANBANK','A/N Bank');
			$crud->display_as('namaBank','Nama Bank');
			$crud->display_as('noRekening','No.Rekening');		
			
			$output = $crud->render();
			$this->_terminal_input($output);
		}
		
		function set_photo(){
			$crud = new grocery_CRUD();
			$crud->set_table('user');
			$crud->display_as('foto','Photo');
			$crud->where('id_user',$this->datauser->id_user);

			//menghapus action
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$crud->unset_back_to_list();			
			
			//menghilangkan field
			$crud->unset_fields('level','username','password','nama','email','nohp','alamat','create_user','status');
			$crud->set_field_upload('foto','assets/uploads/img');
			
			//costume pesan update
			$crud->set_lang_string('update_success_message','Success Update Photo.<div style="display:none">');

			$output = $crud->render();
			$this->_terminal_input($output);
		}
		
		function set_password(){
			$crud = new grocery_CRUD();
			$crud->set_table('user');
			$crud->where('id_user',$this->datauser->id_user);

			//menghapus action
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$crud->unset_back_to_list();			
			
			//menghilangkan field
			$crud->unset_fields('level','username','foto','nama','alamat','email','nohp','create_user','status');
			$crud->change_field_type('password','password');
			
			//costume pesan update
			$crud->set_lang_string('update_success_message','Success Update Password.<div style="display:none">');

			$output = $crud->render();
			$this->_terminal_input($output);
		}
		
		function set_identitas(){
			$crud = new grocery_CRUD();
			$crud->set_table('user');
			$crud->display_as('nohp','No.Handphone');
			$crud->where('id_user',$this->datauser->id_user);

			//menghapus action
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$crud->unset_back_to_list();			
			
			//menghilangkan field
			$crud->unset_fields('foto','password','level','create_user','status');
			
			//costume pesan update
			$crud->set_lang_string('update_success_message','Success Update Identitas.<div style="display:none">');

			$output = $crud->render();
			$this->_terminal_input($output);
		}
		
		function YM(){
			$crud = new grocery_CRUD();
			$crud->set_table('yahoo');
			$crud->columns('IDYM','theme');	
			$crud->display_as('IDYM','ID Yahoo Messenger');	
			$crud->display_as('theme','Theme');	
			
			$output = $crud->render();
			$this->_terminal_input($output);
		}
		
		function slide(){
			$crud = new grocery_CRUD();
			$crud->set_table('slide');
			$crud->columns('judul','tagline','img','url');	
			$crud->display_as('judul','Title');	
			$crud->display_as('tagline','Tagline');	
			$crud->display_as('img','Slide');
			$crud->display_as('url','URL');
			$crud->where('key','n');
			
			$crud->field_type('key','hidden','n');
			$crud->set_field_upload('img','assets/uploads/img');
			
			$output = $crud->render();
			$this->_slide($output);
		}
		
		function slide_key(){
			$crud = new grocery_CRUD();
			$crud->set_table('slide');
			$crud->columns('judul','tagline','img','url');	
			$crud->display_as('judul','Title');	
			$crud->display_as('tagline','Tagline');	
			$crud->display_as('img','Slide');
			$crud->display_as('url','URL');
			$crud->where('key','y');
			
			$crud->field_type('key','hidden','y');
			$crud->set_field_upload('img','assets/uploads/img');
			
			$crud->unset_back_to_list();
			
			$crud->set_lang_string('update_success_message',
                 'Primary Slide Berhasi Di Perbaharui.
                 <script type="text/javascript">
                  window.location = "'.site_url('admin'.'/'.'slide').'";
                 </script>
                 <div style="display:none">
                 '
			);
			
			$output = $crud->render();
			$this->_slide($output);
		}
		
		function report(){
			$crud = new grocery_CRUD();
			$crud->set_table('pesanan');
			$crud->where('status','selesai');
			
			$crud->columns('kode_pesanan','qty','produk','hrg_satuan','diskon','tgl');
			
			//menghapus action
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_read();
			$crud->unset_back_to_list();			
			
			//menghilangkan field

			$output = $crud->render();
			$this->_terminal_report($output);
		}
	}
?>