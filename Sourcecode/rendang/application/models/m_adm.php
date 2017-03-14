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
		
		/*********** ALL PESANAN **************/
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
		/*************** END PESANAN ************/
		
		function getallkontak(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('subjek','Kontak');
			$this->db->where('trash','N');
			$query = $this->db->get();
			return $query->result();
		}
		
		function getallkritik(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('subjek','Kritik');
			$this->db->where('trash','N');
			$query = $this->db->get();
			return $query->result();
		}
		
		function getallsaran(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('subjek','Saran');
			$this->db->where('trash','N');
			$query = $this->db->get();
			return $query->result();
		}
		
		function getalltrash(){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->where('trash','Y');
			$query = $this->db->get();
			return $query->result();
		}
		
		function ToTrash($id) {
			$data=array(
				'trash'=> 'Y'
			);
			$this->db->where('id',$id);
			$this->db->update('kontak',$data);
		}
		
		function RestoreTrash($id) {
			$data=array(
				'trash'=> 'N'
			);
			$this->db->where('id',$id);
			$this->db->update('kontak',$data);
		}
		
		function DeletePermanenly($id){
			$sql="delete from kontak where id = $id";
			$query = $this->db->query($sql);
			return $query;
		}
		
		function show_edit_slide(){
			$this->db->select('*');
			$this->db->from('slide');
			$this->db->where('key','y');
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
			$this->db->where('kode_pesanan',$id);
			$this->db->update('pesanan',$data);
		}
		
		function mselesai($id) {
			$data=array(
				'status'=> 'Selesai'
			);
			$this->db->where('kode_pesanan',$id);
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
		
		function getAll(){
			$id = $this->datauser->id_user;
			$sql="select * from tiket where TKTstatus != 'o'";
			$query = $this->db->query($sql);
			return $query->result();
		}
		
		function open(){
			$id = $this->datauser->id_user;
			$sql="select * from tiket where TKTstatus='open'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function replited(){
			$id = $this->datauser->id_user;
			$sql="select * from tiket where TKTstatus='replited'";
			$query = $this->db->query($sql);
			return $query->result();
		}
		
		function pendding(){
			$id = $this->datauser->id_user;
			$sql="select * from tiket where TKTstatus='pendding'";
			$query = $this->db->query($sql);
			return $query->result();
		}
		
		function close(){
			$id = $this->datauser->id_user;
			$sql="select * from tiket where and TKTstatus='close'";
			$query = $this->db->query($sql);
			return $query->result();
		}
		
		function vw($id){
			$this->db->select('*');
			$this->db->from('tiket');
			$this->db->join('user', 'tiket.userID= user.id_user');
			$this->db->where('tiket.id', $id);
			$query = $this->db->get();
			return $query->result();
		}
		
		function tampilkomentar($id){
			$this->db->select('*');
			$this->db->from('tiket');
			$this->db->join('user', 'tiket.userID= user.id_user');
			$this->db->where('tiket.ticketID', $id);
			$query = $this->db->get();
			return $query->result();
		}
		
		/*********** Manage user ***********/
		function alluser(){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('level','user');
			$this->db->where('status','1');
			$query = $this->db->get();
			return $query->result();
		}
		
		function ulistlock(){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('level','user');
			$this->db->where('status','0');
			$query = $this->db->get();
			return $query->result();
		}
		
		function lockpross($id) {
			$data=array(
				'status'=> 0
			);
			$this->db->where('id_user',$id);
			$this->db->update('user',$data);
		}
		
		
		
		function editpross($id) {
			$nama=$this->input->post('nama');
			$username=$this->input->post('username');
			$email=$this->input->post('email');
			$pwd=$this->input->post('pwd');
			$ins=$this->input->post('ins');
			$data=array(
				'nama'=>$nama,
				'username'=>$username,
				'email'=>$email,
				'password'=>$pwd,
				'instansi'=>$ins
			);
			$this->db->where('id_user',$id);
			$this->db->update('user',$data);
		}
		
		function deletepross($id) {
			$sql="delete from user where id_user = $id";
			$query = $this->db->query($sql);
			return $query;
		}
	}
?>