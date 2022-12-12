<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Master/Client/client_header'); ?>
	<title><?php echo $title; ?></title>
</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">
		<?php $this->load->view('Master/Client/client_navbar'); ?>
		<?php $this->load->view('Master/Client/Content/Appointment/client_content'); ?>
		<?php $this->load->view('Master/Client/client_footer'); ?>
	</div>
</body>
</html>