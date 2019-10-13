<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("biodata_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['biodata'] = $this->biodata_model->getBiodata();
		var_dump($data);
		$this->load->view('admin/biodata/index', $data);
	}
	public function add()
	{
		$biodata = $this->biodata_model;
		$validation = $this->form_validation;
		$validation->set_rules($biodata->rules());
		if ($validation->run()){
			$biodata->save();
			$this->session->set_flashdata('succes','Data Biodata Berhasil Ditambah');
			redirect(site_url('admin/biodata'));
		}
		$this->load->view("admin/biodata");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/biodata');

		$biodata = $this->biodata_model;
		$validation = $this->form_validation;
		$validation->set_rules($biodata->rules());

		if ($validation->run()) {
			$biodata->update();
			$this->session->set_flashdata('susses','Data Biodata Berhasil Diubah');
			redirect(site_url('admin/biodata'));
		}
		$data["biodata"] = $biodata->getById($id);
		if (!$data["biodata"])show_404();

		$this->load->view("admin/biodata/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->biodata_model->delete($id)) {
			redirect(site_url('admin/biodata'));
		}
	}
}