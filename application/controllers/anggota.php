<?php
	class anggota extends CI_Controller {
		public function __construct(){
			parent :: __construct();
			$this->load->model('model_member');
		}

		public function index()
		{
			 $this->load->view('home');
		}
		public function showing()
		{
			$this->load->model('model_member');
			$data['data_member']= $this->model_member->showing()->result_array();
			$this->load->view('data_member', $data);
		}
		public function tambah_data_anggota()
		{
			$this->load->view('tambah_data_anggota');
		}

		public function tambah_data_member()
		{
			$this->load->model('model_member');
			$this->model_member->tambah_data_member();
			redirect ('anggota/showing','refresh');
		} 
		public function edit_data_member($id)
		{
			$data['data_member'] =$this->model_member->ambil_data($id)->row_array();
			$this->load->view('ambil_data_member',$data);
		}

		public function update_member($id)
		{
			$data['member']=$this->model_member->ambil_data_member($id)->row_array();
			$this->load->view('update_member',$data);
		}
		public function update_member_proses()
		{
			$this->model_member->simpan_update_data();
			redirect('anggota/showing','refresh');
		}

		public function delete_member($id){

			$this->model_member->delete_member($id);
			redirect('anggota/showing','refresh');
		}
	}
?>