<?php 
	class Cart_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		function tampil_produk() {
			$q=$this->db->query("SELECT * from barang");
			return $q;
		}
	}
