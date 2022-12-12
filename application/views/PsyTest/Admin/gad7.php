<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('Master/Admin/admin_header.php'); ?>
    <title><?php echo $title; ?></title>
</head>

<body class="hold-transition sidebar-mini ">
    <div class="wrapper">
        <?php $this->load->view('Master/Admin/admin_navbar.php'); ?>
        <?php $this->load->view('Master/Admin/Content/Gad7/admin_content.php'); ?>
        <?php $this->load->view('Master/Admin/admin_sidebar.php'); ?>
        <?php $this->load->view('Master/Admin/admin_footer.php'); ?>
    </div>
</body>

</html>