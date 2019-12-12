<?php
class tiket extends CI_controller
{

	public function index()

	{
		$this->load->view('view-form-tiket');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('admin', 'Nama Admin', 'required', [
			'required' => 'Nama Harus diisi'
		]);

		$this->form_validation->set_rules('pembeli', 'Nama Pembeli', 'required', [
			'required' => 'Nama Harus diisi'
		]);

		$this->form_validation->set_rules('nomor', 'No HP', 'required', [
			'required' => 'No HP Harus diisi' 
		]);

		$this->form_validation->set_rules('rute', 'Rute', 'required', [
			'required' => 'Rute Harus diisi'
		]);

		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Rute Harus diisi' 
		]);

		if ($this->form_validation->run() != true) {
			$this->load->view('view-data-tiket');
		} else {

			$data = [
				'admin' => $this->input->post('admin'),
				'pembeli' => $this->input->post('pembeli'),
				'nomor' => $this->input->post('nomor'),
				'rute' => $this->input->post('rute'),
				'harga' => $this->input->post('harga'),
			];
		
			$this->load->view('view-data-tiket', $data);
		}
	}
}