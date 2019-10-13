<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("pendidikan_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['pendidikan'] = $this->pendidikan_model->getPendidikan();
		var_dump($data);
		$this->load->view('admin/pendidikan/index', $data);
	}
	public function add()
	{
		$pendidikan = $this->pendidikan_model;
		$validation = $this->form_validation;
		$validation->set_rules($pendidikan->rules());
		if ($validation->run()){
			$pendidikan->save();
			$this->session->set_flashdata('succes','Data Pendidikan Berhasil Ditambah');
			redirect(site_url('admin/pendidikan'));
		}
		$this->load->view("admin/pendidikan");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/pendidikan');

		$pendidikan = $this->pendidikan_model;
		$validation = $this->form_validation;
		$validation->set_rules($pendidikan->rules());

		if ($validation->run()) {
			$pendidikan->update();
			$this->session->set_flashdata('susses','Data Pendidikan Berhasil Diubah');
			redirect(site_url('admin/pendidikan'));
		}
		$data["pendidikan"] = $pendidikan->getById($id);
		if (!$data["pendidikan"])show_404();

		$this->load->view("admin/pendidikan/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->pendidikan_model->delete($id)) {
			redirect(site_url('admin/pendidikan'));
		}
	}
}