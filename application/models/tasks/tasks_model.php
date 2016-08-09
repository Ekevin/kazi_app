<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_employee_tasks($eid)
	{
		$employee_tasks = $this->db->get_where('task_table', array('eid'=>$eid))->result_array();
		return $employee_tasks;
	}
	public function add_task()
	{
		$this->load->helper('date');
		//setup data to push to DB;
		$project_id = $this->input->post('projects');
		$employee_id = $this->input->post('employee_id');

		$data = array(
			'eid'=>1,
			'pid'=>$project_id,
			'date_done'=>$this->input->post('date'),
			'task'=>$this->input->post('task'),
			'time_taken'=>'',
			'comments'=>$this->input->post('comments')
			);

		//perform data insertion
		if ($this->db->insert('task_table', $data)) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */