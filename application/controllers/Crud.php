<?php
	class Crud extends CI_Controller {
		public function __construct(){
			parent :: __construct();
			$this->load->model('model_buku');

		}public function index()
		{
			 $this->load->view('home');
		}
		public function tampil()
		{
			$data['data_buku']= $this->model_buku->tampilkan()->result_array();
			$this->load->view('data_buku', $data);
		}
		public function tambah_data_buku()
		{
			$this->load->view('tambah_data_buku');
		}

		public function tambah_data_proses(){
			$this->model_buku->tambah_data_proses();
			redirect ('crud/tampil','refresh');
		}
		public function edit_data_buku($id_buku)
		{
			$data['data_buku'] =$this->model_buku->ambil_data($id_buku)->row_array();
			$this->load->view('ambil_data_buku',$data);
		}

		public function update_buku($id_buku){
			$data['buku']=$this->model_buku->ambil_data_buku($id_buku)->row_array();
			$this->load->view('update_buku',$data);
		}
		public function update_buku_proses(){
			$this->model_buku->simpan_update_data();
			redirect('crud/tampil','refresh');
		}

		public function delete_buku($id_buku){
			$this->model_buku->delete_buku($id_buku);
			redirect('crud/tampil','refresh');
		}
	}
?>