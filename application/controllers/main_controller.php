<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tasks/tasks_model');
		if ($this->session->userdata('loggedin')==false) {
			redirect('users/user/login');
		}
	}

	public function index()
	{
		$eid = $this->session->userdata('employee_id');
		$this->data = array(
			'subview'=>'home_page',
			'employee_tasks'=>$this->tasks_model->get_employee_tasks($eid)
			);
		$this->load->view('default_layout', $this->data);
	}

}

/* End of file main_controller.php */
/* Location: ./application/controllers/main_controller.php */