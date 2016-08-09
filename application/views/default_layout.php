<!-- load the header -->
<?php $this->load->view('templates/header'); ?>

<body>
	<!-- display the nav bar -->
	<?php if($this->session->userdata('loggedin')==TRUE):?>

	<?php
	echo '<nav class="navbar navbar-inverse bg-faded">
			<a class="navbar-brand" href="'.site_url("main_controller").'">Kazi App</a>
			<ul class="nav navbar-nav pull-right">
				<li class="nav-item active">
					<a class="nav-link" href="#">Welcome '.ucfirst($this->session->userdata("first_name"))." ".ucfirst($this->session->userdata('last_name')).'<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Timesheet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="'.site_url("users/user/logout").'">Logout</a>
				</li>
			</ul>
	</nav>'
	?>
<?php endif; ?>

<div id="container">

	<!-- Load the subview set in the controller -->
	<?php $this->load->view($subview); ?>

</div>

<!-- load the footer -->
<?php $this->load->view('templates/footer'); ?>