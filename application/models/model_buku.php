<?php
class Model_buku extends CI_Model{
	public function tampilkan(){
		$data_buku=$this->db->get('buku');//mengambil table
		return $data_buku;
	}

	public function tambah_data_proses(){
		$data_buku=array(
			'id_buku' =>$this->input->post('ib'),
			'judul_buku' =>$this->input->post('jb'),
			'tanggal_peminjaman' =>$this->input->post('tp'));
	$this->db->insert('buku',$data_buku);
	}

	public function ambil_data($id_buku){
	$this->db->where('id_buku',$id_buku);
	$data=$this->db->get('buku');
	return $data;
	}

	public function ambil_data_buku($id_buku){
	 	$this->db->where('id_buku',$id_buku);
	 	$data=$this->db->get('buku');
	 	return $data;
	}

	 public function simpan_update_data(){
	 	$id_buku=$this->input->post('id_buku');
	 	$data_buku=array('judul_buku' =>$this->input->post('jb'),
	 	'tanggal_peminjaman' =>$this->input->post('tp'));
	 	$this->db->where('id_buku',$id_buku);
	 	$this->db->update('buku',$data_buku);
	 }
	 public function delete_buku($id_buku){
	 	$this->db->where('id_buku',$id_buku);
	 	$this->db->delete('buku');
	 }
	}
?>
