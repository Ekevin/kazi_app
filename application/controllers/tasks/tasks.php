<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('tasks/tasks_model');
		$this->load->model('projects/projects_model');

	}

	// List all your items
	public function index()
	{
		//var_dump($this->tasks_model->get_employee_tasks(1));
		$this->data = array(
				'projects'=>$this->projects_model->get_projects(),
				'Title'=>'Add Project Tasks',
				'subview'=>'tasks/tasks'
				);
		$this->load->view('default_layout',$this->data);
		//$this->session->userdata('employee_id');
	}

	// Add a new task
	public function add()
	{
		if ($this->tasks_model->add_task()) {
			//alert succes message and redirect the user
			echo "<script>alert('Yeah!')</script>";
			redirect('tasks/tasks','refresh');
		} else {
			echo "failed";
		}
		
	}

	//Update a task
	public function update( $tid )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file tasks.php */
/* Location: ./application/controllers/tasks/tasks.php */