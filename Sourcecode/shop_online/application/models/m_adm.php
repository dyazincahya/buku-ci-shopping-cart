<?php
	class M_Adm extends CI_Model {
		private $datauser;
		function __construct() {
			parent::__construct();
			
			if ($this->session->userdata('isLogin') == false){
                redirect('login/login_form');
            }
            $this->datauser = $this->session->userdata('data_user');
		}
		function pesananBaru(){
			$id = $this->datauser->id_user;
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.iduser', $id);
			$this->db->where('pesanan.status', 'Baru');
			$query = $this->db->get();
			return $query->result();
		}
		
		function pesananDikirim(){
			$id = $this->datauser->id_user;
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.iduser', $id);
			$this->db->where('pesanan.status', 'Sedang Dikirim');
			$query = $this->db->get();
			return $query->result();
		}
		
		function pesananBatal(){
			$id = $this->datauser->id_user;
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.iduser', $id);
			$this->db->where('pesanan.status', 'Batal');
			$query = $this->db->get();
			return $query->result();
		}
		
		function pesananSelesai(){
			$id = $this->datauser->id_user;
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.iduser', $id);
			$this->db->where('pesanan.status', 'Selesai');
			$query = $this->db->get();
			return $query->result();
		}
		
		function AllpesananBaru(){
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.status', 'Baru');
			$query = $this->db->get();
			return $query->result();
		}
		
		function AllpesananDikirim(){
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.status', 'Sedang Dikirim');
			$query = $this->db->get();
			return $query->result();
		}
		
		function AllpesananBatal(){
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.status', 'Batal');
			$query = $this->db->get();
			return $query->result();
		}
		
		function AllpesananSelesai(){
			$this->db->select('*');
			$this->db->from('pesanan');
			$this->db->join('user', 'pesanan.iduser= user.id_user');
			$this->db->where('pesanan.status', 'Selesai');
			$query = $this->db->get();
			return $query->result();
		}
		
		function AlllistKonfir(){
			$this->db->select('*');
			$this->db->from('konfir_pembayaran');
			$this->db->join('user', 'konfir_pembayaran.iduser= user.id_user');
			$this->db->join('pesanan', 'konfir_pembayaran.IDpesanan= pesanan.id');
			$this->db->join('bank', 'konfir_pembayaran.IDbank= bank.id');
			$this->db->where('pesanan.status', 'Konfirmasi');
			$query = $this->db->get();
			return $query->result();
		}
		
		function getallkontak(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('subjek','Kontak');
			$query = $this->db->get();
			return $query->result();
		}
		
		function getallkritik(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('subjek','Kritik');
			$query = $this->db->get();
			return $query->result();
		}
		
		function getallsaran(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('subjek','Saran');
			$query = $this->db->get();
			return $query->result();
		}
		
		function batal($id) {
			$data=array(
				'status'=> 'Batal'
			);
			$this->db->where('id',$id);
			$this->db->update('pesanan',$data);
		}
		
		function balik($id) {
			$data=array(
				'status'=> 'Baru'
			);
			$this->db->where('id',$id);
			$this->db->update('pesanan',$data);
		}
		
		function mproses($id) {
			$data=array(
				'status'=> 'Sedang Dikirim'
			);
			$this->db->where('id',$id);
			$this->db->update('pesanan',$data);
		}
		
		function update_status_konfirmasi($id) {
			$data=array(
				'status'=> 'Konfirmasi'
			);
			$this->db->where('id',$id);
			$this->db->update('pesanan',$data);
		}
		
		function listKonfir(){
			$id = $this->datauser->id_user;
			$this->db->select('*');
			$this->db->from('konfir_pembayaran');
			$this->db->join('user', 'konfir_pembayaran.iduser= user.id_user');
			$this->db->join('pesanan', 'konfir_pembayaran.IDpesanan= pesanan.id');
			$this->db->join('bank', 'konfir_pembayaran.IDbank= bank.id');
			$this->db->where('konfir_pembayaran.iduser', $id);
			$this->db->where('pesanan.status', 'Konfirmasi');
			$query = $this->db->get();
			return $query->result();
		}
		
		function listBank() {
			$this->db->select('*');
			$this->db->from('bank');
			$query = $this->db->get();
			return $query->result();
		}
	}
?>