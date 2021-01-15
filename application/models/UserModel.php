<?php

	class UserModel extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function index(){
			$query = $this->db->get('users');
			$data = $query->result();
			return $data;
		}
		public function getdata($id){
			$query = $this->db->get_where('users',['id'=>$id]);
			$data = $query->result();
			return $data;
		}
		public function store($data){
			if($this->db->insert('users',$data)){
				return true;
			}
		}
		public function delete($id){
			if($this->db->delete('users', 'id = '.$id)){
				return true;
			}
		}
		public function update($data,$id){
			$updateData = array(
				'username' => $data['username'],
				'password' => $data['password']
			);
			$this->db->where('id', $id);
			if($this->db->update('Users', $updateData)){
				return true;
			}
			
		}
	}
