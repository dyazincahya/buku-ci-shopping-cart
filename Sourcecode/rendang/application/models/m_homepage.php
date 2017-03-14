<?php
	class M_Homepage extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		function new3() {
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->limit('3');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}
		
		function allproduk() {
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}
		
		function newproduk() {
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->limit(1);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}
		
		function detailproduk($id) {
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result();
		}
		
		function YMCS() {
			$this->db->select('*');
			$this->db->from('yahoo');
			$query = $this->db->get();
			return $query->result();
		}
		
		function slide() {
			$this->db->select('*');
			$this->db->from('slide');
			$this->db->where('key','n');
			$query = $this->db->get();
			return $query->result();
		}
		
		function keyslide() {
			$this->db->select('*');
			$this->db->from('slide');
			$this->db->where('key','y');
			$query = $this->db->get();
			return $query->result();
		}
	}