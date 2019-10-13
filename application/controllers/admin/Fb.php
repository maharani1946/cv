<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("fb_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['fb']= $this->fb_model->getFb();
		var_dump($data);
		$this->load->view('admin/fb/index', $data);
	}
	public function add()
	{
		$fb = $this->fb_model;
		$validation = $this->form_validation;
		$validation->set_rules($fb->rules());
		if ($validation->run()){
			$fb->save();
			$this->session->set_flashdata('succes','Data Facebook Berhasil Ditambah');
			redirect(site_url('admin/fb'));
		}
		$this->load->view("admin/fb");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/fb');

		$fb = $this->fb_model;
		$validation = $this->form_validation;
		$validation->set_rules($fb->rules());

		if ($validation->run()) {
			$fb->update();
			$this->session->set_flashdata('susses','Data Facebook Berhasil Diubah');
			redirect(site_url('admin/fb'));
		}
		$data["fb"] = $fb->getById($id);
		if (!$data["fb"])show_404();

		$this->load->view("admin/fb/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->fb_model->delete($id)) {
			redirect(site_url('admin/fb'));
		}
	}
}