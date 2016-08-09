<div class="col-md-6 col-md-offset-3">
	<h1>Tasks</h1>
		<?php
			echo form_open("tasks/tasks/add");

			$data = array(
				'employee_id'=>$this->session->userdata("eid")
				);
			echo form_hidden($data);

			echo '<div class="input-group">
				<span class="input-group-addon">Project Name: </span>
				<select class="form-control" name="projects">';
			foreach ($projects as $project):
			echo '<option value="'.$project->pid.'"name="projects">'.$project->project_name.'</option>';
			//echo form_hidden($project->project_name, $project->pid);
		  	endforeach;
		  	echo '</select>
				</div>';

			echo br();
			echo '<div class="input-group">
				<span class="input-group-addon">Task: </span>
				<input class="form-control" type="text" name="task" required placeholder="Enter Task"/>
				</div>';
			echo br();
			echo '<div class="input-group">
				<span class="input-group-addon">Comments: </span>
				<textarea name="comments" class="form-control" ></textarea>
				</div>';
			echo br();
			echo '<div class="input-group">
				<span class="input-group-addon">Date: </span>
				<input type="date" class="form-control"  name="date" required value=""/>
				</div>';
			echo br();
			echo '<button type="submit" class="btn btn-default btn-center" style="margin-left:30px;"><span class="fa fa-hand-o-right"></span> Submit</button>';
			echo nbs(12);
			echo '<button type="reset" class="btn btn-default" data-dismiss="modal" style="margin-left:60px;"><span class="fa fa-times"></span> Cancel</button>';
			echo br(2);
			echo form_close();

		?>
</div>