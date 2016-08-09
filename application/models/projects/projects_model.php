<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function get_projects()
	{
		$projects = $this->db->get('projects_table');
		return $projects->result();
	}
}

/* End of file projects_model.php */
/* Location: ./application/models/projects/projects_model.php */