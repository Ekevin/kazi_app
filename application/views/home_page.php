<pre>
  	<?php //print_r($this->session->userdata); ?>
</pre>
<hr>
<pre>
	<?php //var_dump($employee_tasks) ?>
</pre>

<div class="col-md-8 col-md-offset-2">
<div>
	<h1>Tasks</h1> <a href="tasks/tasks" title=""><button class="btn btn-success pull-right" name="add task" value="Add Task">Add Task</button></a>
</div>
	<table class="table" style="margin-bottom:50px;">
		<thead>
			<tr>
				<th>Project Name</th>
				<th>Date Done</th>
				<th>Task</th>
				<th>Time Taken</th>
				<th>Comments</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		
		<?php foreach ($employee_tasks as $employee_task):?>
			
			<tr>
				<td><?php echo "to do"; ?></td>
				<td><?php echo $employee_task["date_done"]; ?></td>
				<td><?php echo $employee_task["task"]; ?></td>
				<td><?php echo $employee_task["time_taken"]; ?></td>
				<td><?php echo $employee_task["comments"]; ?></td>
				<td><a href="controller/del/<?php echo $employee_task["eid"]; ?>" title="" class="btn btn-sm btn-primary">Edit</a> | <a href="#" title="" class="btn btn-sm btn-danger">Del</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>