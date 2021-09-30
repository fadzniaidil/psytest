<footer class="main-footer">
	<div class="float-right d-none d-sm-inline">
		PsyTest
	</div>
	<strong>Pusat Kaunseling UPSI &copy;  <a href="http://kaunseling.upsi.edu.my/">PsyTest</a>.</strong> All rights reserved.
</footer>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<?php if($this->session->userdata('gawr') == 'gura'){
	echo "<script>
			Swal.fire({
				toast: true,
				icon: 'success', 
				title : 'Successful requested appointment',
				position: 'top-end',
			    showConfirmButton: false,
			    timer: 3000
			})
		</script>";
	$this->session->unset_userdata('gawr');
} ?>

<?php if($app == 1){
	echo "<script>
			Swal.fire({
				toast: true,
				icon: 'info', 
				title : 'Please answer the assessment.',
				position: 'top-end',
				showCloseButton: true,
				showConfirmButton: false
			})
		</script>";
}
;?>
<?php if($this->session->userdata('test') == 'test'){
	echo "<script>
			Swal.fire({
				toast: true,
				icon: 'success', 
				title : 'Successful answer the assessment',
				position: 'top-end',
			    showConfirmButton: false,
			    timer: 3000
			})
		</script>";
	$this->session->unset_userdata('test');
} ?>