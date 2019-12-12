<?php
defined ('BASEPATH') or exit ('no direct script access allowed');

class buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		cek_login();
	}

	//manajemen Buku
	public function index()
	{
		$data['judul'] = 'Data Buku';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['buku'] = $this->ModelBuku->getBuku()->result_array();
		$data['kategori'] = $this->ModelBuku->getKategori()->result_array();


		$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|min_length[3]', [
			'required' => 'Judul Buku harus diisi',
			'min_length' => 'Judul buku terlalu pendek'
			]);
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
			'required' => 'Nama pengarang harus diisi',
			]);
		$this->form_validation->set_rules('pengarang', 'Nama Pengarang', 'required|min_length[3]', [
			'required' => 'Nama pengarang harus diisi',
			'min_length' => 'Nama pengarang terlalu pendek'
			]);
		$this->form_validation->set_rules('penerbit', 'Nama Penerbit', 'required|min_length[3]', [
			'required' => 'Nama penerbit harus diisi',
			'min_length' => 'Nama penerbit terlalu pendek'
			]);
		$this->form_validation->set_rules('tahun', 'Tahun Terbit', 'required|min_length[3]|max_length[4]|numeric', [
			'required' => 'Tahun terbit harus diisi',
			'min_length' => 'Tahun terbit terlalu pendek',
			'max_length' => 'Tahun terbit terlalu panjang',
			'numeric' => 'Hanya boleh diisi angka'
			]);
		$this->form_validation->set_rules('isbn', 'Nomor ISBN', 'required|min_length[3]|numeric', [
			'required' => 'Nama ISBN harus diisi',
			'min_length' => 'Nama ISBN terlalu pendek',
			'numeric' => 'Yang anda masukan bukan angka'
			]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
			'required' => 'Stok harus diisi',
			'numeric' => 'Yang anda masukan bukan angka'
			]);
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('buku/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				
			];

			$this->ModelBuku->simpanKategori($data);
			redirect('buku');
		}
	}


	public function kategori()
	{
		$data['judul'] = 'Kategori Buku';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->ModelBuku->getKategori()->result_array();

		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Judul Buku harus diisi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('buku/kategori', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'kategori' => $this->input->post('kategori')
			];

			$this->ModelBuku->simpanKategori($data);
			redirect('buku/kategori');
		}
	}

	public function hapusKategori()
	{
		$where = ['id' => $this->uri->segment(3)];
		$this->ModelBuku->hapusKategori($where);
		redirect('buku/kategori');
	}
}