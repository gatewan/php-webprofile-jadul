<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('produk_m');
		$this->load->library('session');
		}
	public function index()
	{
		//$this->load->model('produk_m'); 
		$data['base_url'] = base_url().'main/index/';
		$data['total_rows'] = $this->produk_m->count_all();
		$data['per_page'] = 10;
		$limit1 = $this->uri->segment(3, 0);
		$this->pagination->initialize($data);
		$data['produk'] = $this->produk_m->get_all($limit1, $data['per_page']);
		$this->load->view('tproduk_v', $data);
		//$this->load->view('iproduk_v');
	}
	
	public function input()
	{
		$this->load->view('iproduk_v');
		
	}
	
	public function simpan()
	{
		$this->produk_m->insert();
		redirect('main');
		
	}
	
	public function hapus(){
		$idproduk = $this->uri->segment(3);
		$this->produk_m->delete($idproduk);
		redirect('main');
		}
	
	public function edit(){
		$id= $this->uri->segment(3);
		$data['p']=$this->produk_m->get_one($id);
		$this->load->view('eproduk_v',$data);
		
		}
		
		public function cari(){
		$this->session->set_userdata('cbkategori', $this->input->post('cbkategori'));
		$this->session->set_userdata('txtcari', $this->input->post('txtcari'));
		redirect('main');
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>