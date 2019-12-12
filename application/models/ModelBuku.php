<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
	//manajemen buku
	public function getBuku()
	{
		return $this->db->get('buku');
	}

	public function bukuWhere($where)
	{
		return $this->db->get_where('buku', $where);
	}

	public function simpanBuku($data = null)
	{
	$id 			=$this->input->post('id');
	$judul_buku 	=$this->input->post('judul_buku');
	$id_katagori 	=$this->input->post('id_katagori');
	$pengarang 		=$this->input->post('pengarang');
	$penerbit 		=$this->input->post('penerbit');
	$tahun_terbit 	=$this->input->post('tahun_terbit');
	$isbn 			=$this->input->post('isbn');
	$stok 			=$this->input->post('stok');
	$dipinjam 		=$this->input->post('dipinjam');
	
		$data= array(
			'id'			=>$id,
			'judul_buku'	=>$judul_buku,
			'id_katagori'	=>$id_katagori,
			'pengarang'		=>$pengarang,
			'penerbit'		=>$penerbit,
			'tahun_terbit'	=>$tahun_terbit,
			'isbn'			=>$isbn,
			'stok'			=>$stok,
			'dipinjam'		=>$dipinjam
		);
		$this->db->insert('buku',$data);
		
	}

	public function updateBuku($data = null, $where = null)
	{
		$this->db->update('buku', $data, $where);
	}

	public function hapusBuku($where = null)
	{
		$this->db->delete('buku', $where);
	}

	public function total($field, $where)
	{
		$this->db->select_sum($field);
		if(!empty($where) && count($where) > 0){
			$this->db->where($where);
		}
		$this->db->from('buku');
		return $this->db->get()->row($field);
	}

	//manajemen kategori
	public function getKategori()
	{
		return $this->db->get('kategori');
	}

	public function kategoriWhere($where)
	{
		return $this->db->get_where('kategori', $where);
	}

	public function simpanKategori($data = null)
	{
		$this->db->insert('kategori', $data);
	}

	public function hapusKategori($where = null)
	{
		$this->db->delete('kategori', $where);
	}

	public function updateKategori($where = null, $data = null)
	{
		$this->db->update('kategori', $data, $where);
	}
	//join
	public function joinKategoriBuku($where)
	{
		$this->db->select('buku.id_kategori,kategori.kategori');
		$this->db->from('buku');
		$this->db->join('kategori','kategori.id=buku.id_kategori');
		$this->db->where($where);
		return $this->db->get();
	}
}