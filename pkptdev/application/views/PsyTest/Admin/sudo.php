<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Master/Admin/admin_header') ?>
	<title><?php echo $title ?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<?php $this->load->view('Master/Admin/admin_navbar'); ?>
		<?php $this->load->view('Master/Admin/admin_sidebar'); ?>
		<?php $this->load->view('Master/Admin/Content/Sudo/admin_content'); ?>
		<?php $this->load->view('Master/Admin/admin_footer'); ?>
	</div>
</body>
</html>