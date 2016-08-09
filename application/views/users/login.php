<div class="col-md-4 col-md-offset-4" style="margin-top:30px; border:2px solid #ccc;">
	<fieldset id="fieldset">
		<legend>Please Login</legend>
		<span class="fa-stack fa-4x pull-left">
	      <i class="fa fa-lock fa-stack-2x text-danger"></i>
	      <!-- <i class="fa fa-lock fa-stack-2x text-primary fa-inverse"></i> -->
	    </span>
	<!-- login form start -->
    	<?php
    	echo validation_errors();
		echo form_open("users/user/login");
		echo '<div class="input-group">
			<span class="input-group-addon">Email: </span>
			<input type="email" class="form-control" name="email" required value="" placeholder="Enter Your Email"/>
			</div>';
		echo br();
		echo '<div class="input-group">
				<span class="input-group-addon">Password: </span>
		<input class="form-control" type="password" name="password" required value="" placeholder="Enter Your Password"/>
			</div>';
		echo br();
		echo '<button type="submit" class="btn btn-default btn-center" style="margin-left:30px;"><span class="fa fa-hand-o-right"></span> Login</button>';
		echo nbs(12);
		echo '<button type="reset" class="btn btn-default" data-dismiss="modal" style="margin-left:60px;"><span class="fa fa-times"></span> Cancel</button>';
		echo br(2);
		echo '<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#modal-1">Sign up</button>';
		echo br(2);
		echo form_close();
		?>
	</fieldset>
</div>

<!-- modal form to add new user -->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Add New User</h4>
			</div>
			<div class="modal-body">
				<?php
					echo validation_errors();
					
					echo form_open('#');
					echo form_label('First Name', 'fname');
					echo form_input('fname', '', 'class="form-control"');

					echo form_label('Last Name', 'fname');
					echo form_input('lname', '', 'class="form-control"');

					echo form_label('Phone', 'phone');
					echo form_input('phone', '', 'class="form-control"');

					echo form_label('Email', 'email');
					echo form_input('email', 'email', 'class="form-control"');

					echo form_label('Password', 'password');
					echo form_password('password', '','class="form-control"');

					echo form_label('Confirm Password', 'password_confirm');
					echo form_password('password_confirm', '','class="form-control"');

					echo form_close();
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->