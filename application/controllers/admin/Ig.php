<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ig extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ig_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['ig'] =$this->ig_model->getIg();
		var_dump($data);
		$this->load->view('admin/ig/index', $data);
	}
	public function add()
	{
		$ig = $this->ig_model;
		$validation = $this->form_validation;
		$validation->set_rules($ig->rules());
		if ($validation->run()){
			$ig->save();
			$this->session->set_flashdata('succes','Data Instagram Berhasil Ditambah');
			redirect(site_url('admin/ig'));
		}
		$this->load->view("admin/ig");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/ig');

		$ig = $this->ig_model;
		$validation = $this->form_validation;
		$validation->set_rules($ig->rules());

		if ($validation->run()) {
			$ig->update();
			$this->session->set_flashdata('susses','Data Instagram Berhasil Diubah');
			redirect(site_url('admin/ig'));
		}
		$data["ig"] = $ig->getById($id);
		if (!$data["ig"])show_404();

		$this->load->view("admin/ig/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->ig_model->delete($id)) {
			redirect(site_url('admin/ig'));
		}
	}
}