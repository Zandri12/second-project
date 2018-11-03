<?php
class Model_member extends CI_Model{
	public function showing(){
		$data_member=$this->db->get('member');//mengambil table
		return $data_member;
	}

	public function tambah_data_member(){
		$data_member=array('id' =>$this->input->post('id'),
						'Nama' =>$this->input->post('nama'),
						'jenis_kelamin' =>$this->input->post('jenis'),
						'Kelas' =>$this->input->post('Kelas'));
	
		$this->db->insert('member',$data_member);
	}

	public function ambil_data($id){
	$this->db->where('id',$id);
	$data=$this->db->get('member');
	return $data;
	}

	public function ambil_data_member($id){
	 	$this->db->where('id',$id);
	 	$data=$this->db->get('member');
	 	return $data;
	}

	 public function simpan_update_data(){
	 	$id_member=$this->input->post('id');
	 	$data_member=array('Nama' =>$this->input->post('nama'),
	 	'jenis_kelamin' =>$this->input->post('jenis'),
	 	'Kelas' =>$this->input->post('Kelas'));
	 	$this->db->where('id',$id_member);
	 	$this->db->update('member',$data_member);
	 }
	 public function delete_member($id){
	 	$this->db->where('id',$id);
	 	$this->db->delete('member');
	 }
}
?>
