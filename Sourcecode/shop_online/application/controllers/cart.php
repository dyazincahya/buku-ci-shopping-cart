<?php
	class Cart extends CI_Controller { // Our Cart class extends the Controller class
		private $datauser;
		function __construct() {
			parent::__construct();
			
			if ($this->session->userdata('isLogin') == false){
					redirect('login/login_form');
			}
			$this->load->library('form_validation'); // digunakan untuk proses validasi yg di input
			$this->load->model('cart_model'); // Load our cart model for our entire class
			$this->load->library(array('cart')); // Load our cart model for our entire class
			$this->load->database(); // Load our cart model for our entire class
			$this->load->helper(array('url','form')); // Load our cart model for our entire class
			$this->datauser = $this->session->userdata('data_user');
		}
		
		function index() {
			$data['produk'] = $this->cart_model->tampil_produk();
			$data['pengguna'] = $this->datauser;
			$this->load->view('home_cart', $data); // Display the page
		}
		
		function tambah() {
			$id = $this->input->post('kode_barang'); // Assign posted product_id to $id
			$cty = $this->input->post('banyak'); // Assign posted quantity to $cty
			
			$this->db->where('kode_barang', $id); // Select where id matches the posted id
			$query = $this->db->get('barang', 1); // Select the products where a match is found and limit the query by 1
			
			// Check if a row has been found
			if($query->num_rows > 0){
			
				foreach ($query->result() as $row)
				{
					$data = array(
						'id'      => $id,
						'qty'     => $cty,
						'price'   => $row->harga,
						'name'    => $row->nama_barang
					);

					$this->cart->insert($data);
				}
			}
			
		}
		
		function show_cart(){
			$data['pengguna'] = $this->datauser;
			$this->load->view('list_cart', $data);
		}
		
		function empty_cart(){
			$this->cart->destroy();
			redirect('cart');
		}
		function total_cart() {
			$data['total'] = $this->cart->total_items();
			$this->load->view('total',$data);
		}
		
		function pesanSekarang() {
			$this->form_validation->set_rules('IDpesanan[]', 'kode_pesanan', 'required|trim|xss_clean');
			$this->form_validation->set_rules('IDuser[]', 'iduser', 'required|trim|xss_clean');
			$this->form_validation->set_rules('qty[]', 'qty', 'required|trim|xss_clean');
			$this->form_validation->set_rules('produk[]', 'produk', 'required|trim|xss_clean');
			$this->form_validation->set_rules('harga_satuan[]', 'hrg_satuan', 'required|trim|xss_clean');
			
			if ($this->form_validation->run() == FALSE){
				echo validation_errors(); // tampilkan apabila ada error
			}else{
				
				$kp = $this->input->post('IDpesanan');
				$tg = date('Y-m-d H-i-s');
				$result = array();
				foreach($kp AS $key => $val){
					$result[] = array(
						"kode_pesanan" 	=> $_POST['IDpesanan'][$key],
						"iduser" 		=> $_POST['IDuser'][$key],
						"qty"          	=> $_POST['qty'][$key],
						"produk"       	=> $_POST['produk'][$key],
						"hrg_satuan"        => $_POST['harga_satuan'][$key],
						"tgl" 			=> $tg,
						"status" 		=> 'Baru'
					);
				}            
				
				$res = $this->db->insert_batch('pesanan', $result); // fungsi dari codeigniter untuk menyimpan multi array
				
				if($res){
					echo "Barang Sudah Dipesan";
					redirect('admin/pesananKu');
				}else{
					echo "gagal di input";
				}
			}
		}
	}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */