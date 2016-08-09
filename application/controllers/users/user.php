<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users/users_model');
	}

	public function index()
	{
		
	}
	public function login()
	{
		$homepage = 'main_controller';
		
		$this->users_model->is_loggedin() == false || redirect($homepage);

		$rules = $this->users_model->rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {

			if ($this->users_model->login() == TRUE) {
				redirect($homepage);
			}
			else {
				$this->session->set_flashdata('error', 'Invalid Email and or password');
				redirect('users/user/login','refresh');
			}
		}

		$this->data = array(
			'subview' => 'users/login',
			'title'=>'Login'
			);
		$this->load->view('default_layout', $this->data);
	}
	//logout the user
	public function logout()
	{
		$this->users_model->logout();
		redirect('users/user/login');
	}
	//add a new user
	public function add_user()
	{
		
	}

}

/* End of file user.php */
/* Location: ./application/controllers/users/user.php */