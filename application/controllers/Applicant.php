<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {

	public function index()
	{
		$this->load->view('app_form');
	}
	
	public function form() {
		$gender = $this->input->post('jk');
		switch ($gender) {
			case '1':
				$gender='Laki-laki';
				break;
			
			case '2':
				$gender='Perempuan';
				break;

			default:
				$gender='';
				break;
		}

		$data = array(
			'A_ID' => $this->input->post('id'), 
			'A_NAMA' => $this->input->post('nama'),
			'A_INST' => $this->input->post('institusi'),
			'A_DEPT' => $this->input->post('departemen'),
			'A_ALAMAT' => $this->input->post('alamat'),
			'A_KOTA' => $this->input->post('kota'),
			'A_PROVINSI' => $this->input->post('provinsi'),
			'A_KODE_POS' => $this->input->post('kode_pos'),
			'A_EMAIL' => $this->input->post('email'),
			'A_HP' => $this->input->post('telpon'),
			'A_GENDER' => $gender,
			'A_BIDANG' => $this->input->post('area_fokus'),
			);
		$this->load->model('Form_Model');
		$this->Form_Model->insert($data);
	}
}
