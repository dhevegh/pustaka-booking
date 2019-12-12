<?php
defined ('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	} 

	public function index()
	{
		$data['judul'] = "Halaman Depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}

	public function about()
	{
		$data['judul'] = "Halaman About";
		$this->load->view('v_header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('v_footer', $data);
	}

	public function buku()
	{
		$data['judul'] = "Halaman Buku";
		$data['buku'] = $this->ModelBuku->getBuku('buku')->result();
		$this->load->view('v_header', $data);
		$this->load->view('v_buku', $data);
		$this->load->view('v_footer', $data);
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Buku";
		$this->load->view('v_header', $data);
		$this->load->view('v_tambah', $data);
		$this->load->view('v_footer');

	}

	public function tambah_act()
	{
		$this->ModelBuku->simpanBuku();
		redirect('web/recordBuku');
	}
}