<?php
class produk_m extends CI_Model{
	function __construct(){
		parent::__construct();
		}
	function get_all($limit1='', $limit2=''){  //menampilkan data
		$kategori = $this->session->userdata('cbkategori');
		$cari = $this->session->userdata('txtcari');
		$sql = 'SELECT * FROM produk WHERE 1';
			if($kategori){
				$sql .= ' AND '.$kategori.' LIKE "%'.$cari.'%" ';
				}
			$sql .= ' LIMIT '.$limit1;
			if($limit2){
				$sql .= ', '.$limit2;
			}
		return $this->db->query($sql);
	}
	function count_all(){  //menampilkan data
		$kategori = $this->session->userdata('cbkategori');
		$cari = $this->session->userdata('txtcari');
		$sql = 'SELECT * FROM produk WHERE 1';
			if($kategori){
				$sql .= ' AND '.$kategori.' LIKE "%'.$cari.'%" ';
				}
		$hasil = $this->db->query($sql);
		return $hasil->num_rows();
	}
	
	function get_one($id){  //menampilkan data
		$sql = 'SELECT * FROM produk WHERE id_produk= '.$id;
		$hasil = $this->db->query($sql);
		if ($hasil->num_rows()){
			return $hasil->row();
		}else{
			return false;
			}
	}
	
	function insert(){
	$data = array(
		'nama' => $this->input->post('nama'),
		'jenis' => $this->input->post('jenis'),
		'stock' => $this->input->post('stock'),
		'harga' => $this->input->post('harga'),
		'merk' => $this->input->post('merk')
		);
		
		if($this->input->post('id_produk')){
			$this->db->where('id_produk',$this->input->post('id_produk'));
			$this->db->update('produk',$data);
			}else{
			$this->db->insert('produk',$data);
		}
	}
	function delete($idproduk){
		if($idproduk){
			$sql = 'DELETE FROM produk WHERE id_produk = '.$idproduk;
			$this->db->query($sql);
			}
		
/*
$this->db->where('idproduk', $idproduk);
$this->db->delete('produk');
*/			
	}
}
?>
