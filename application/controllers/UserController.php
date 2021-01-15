<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['records'] = $this->UserModel->index();
		$this->load->view('user', $data);
	}
	public function store(){
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		if($this->UserModel->store($data)){
			echo 'Inserted';
			redirect('user');
		}
	}
	public function delete($id){
		if($this->UserModel->delete($id)){
			echo 'Deleted';
			redirect('user');
		}
	}
	public function edit($id){
		$data['records'] = $this->UserModel->getdata($id);
		$this->load->view('edit',$data);
	}
	public function update($id){
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		if($this->UserModel->update($data,$id)){
			echo 'Updated';
			redirect('user');
		}
	}
}
