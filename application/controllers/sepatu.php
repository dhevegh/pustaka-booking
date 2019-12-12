<?php
class sepatu extends CI_controller
{

	public function index()

	{
		$this->load->view('view-form-sepatu');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama Pembeli', 'required', [
			'required' => 'Nama Harus diisi'
		]);

		$this->form_validation->set_rules('nomor', 'No HP', 'required', [
			'required' => 'No HP Harus diisi' 
		]);

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-sepatu');
		} else {

			$data = [
				'nama' => $this->input->post('nama'),
				'nomor' => $this->input->post('nomor'),
				'merk' => $this->input->post('merk'),
				'size' => $this->input->post('size'),
				'harga' => $this->input->post('harga')
			];
		
			$this->load->view('view-data-sepatu', $data);
		}
	}
}