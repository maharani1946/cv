<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengalaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("pengalaman_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['pengalaman'] =$this->pengalaman_model->getPengalaman();
		var_dump($data);
		$this->load->view('admin/pengalaman/index', $data);
	}
	public function add()
	{
		$pengalaman = $this->pengalaman_model;
		$validation = $this->form_validation;
		$validation->set_rules($pengalaman->rules());
		if ($validation->run()){
			$pengalaman->save();
			$this->session->set_flashdata('succes','Data Pengalaman Berhasil Ditambah');
			redirect(site_url('admin/pengalaman'));
		}
		$this->load->view("admin/pengalaman");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/pengalaman');

		$pengalaman = $this->pengalaman_model;
		$validation = $this->form_validation;
		$validation->set_rules($pengalaman->rules());

		if ($validation->run()) {
			$pengalaman->update();
			$this->session->set_flashdata('susses','Data Pengalaman Berhasil Diubah');
			redirect(site_url('admin/pengalaman'));
		}
		$data["pengalaman"] = $pengalaman->getById($id);
		if (!$data["pengalaman"])show_404();

		$this->load->view("admin/pengalaman/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->pengalaman_model->delete($id)) {
			redirect(site_url('admin/pengalaman'));
		}
	}
}