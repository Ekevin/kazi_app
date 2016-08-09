<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	//set up valdation rules for the login form;
	public $rules = array(
			'email'=>array(
				'field'=>'email',
				'label'=>'email',
				'rules'=>'trim|required|valid_email'),
			'password'=>array(
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'trim|required'
				)
			);
	public $new_user_rules = array(
		'first_name'=>array(
			'field'=>'fname',
			'label'=>'fname',
			'rules'=>'trim|required||'
			)
		);

	public function __construct() {
		parent::__construct();
	}

	public function login()
	{
		$user = $this->db->get_where('employee_table', array(
														'email' => $this->input->post('email'),
														'password'=>md5($this->input->post('password'))))->row_array();
		if (count($user)) {
			// user exists therefore allow access
			$data = array(
				'employee_id' => $user['eid'],
				'first_name'=>$user['first_name'],
				'last_name' => $user['last_name'],
				'email' =>$user['email'],
				'phone'=>$user['phone'],
				'loggedin'=>TRUE
				);
			$this->session->set_userdata($data);
		}
	}

	public function is_loggedin()
	{
		return $this->session->userdata('loggedin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}
	public function add_user()
	{
		$data = array(
			'first_name'=>$this->input->post('fname'),
			'last_name'=>$this->input->post('lname'),
			'phone'=>$this->input->post('phone'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('name'))
			);

	}
}

/* End of file users_model.php */
/* Location: ./application/models/users/users_model.php */