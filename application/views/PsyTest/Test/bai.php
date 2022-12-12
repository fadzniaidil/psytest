<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('Master/Test/test_header'); ?>
	<title><?php echo $title; ?></title>
</head>

<body class="hold-transition layout-top-nav">
	<div class="wrapper">
		<?php $this->load->view('Master/Test/test_navbar'); ?>
		<?php $this->load->view('Master/Test/Content/bai/test_content'); ?>
		<?php $this->load->view('Master/Test/test_footer'); ?>
	</div>

</body>

</html>