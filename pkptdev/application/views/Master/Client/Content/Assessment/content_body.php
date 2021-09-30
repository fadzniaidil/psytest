<div class="content">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card card-info">
					<div class="card-body">
						<h5 class="text-danger text-center">Disclaimer</h5>
						<h6 class="text-center">This website is made for counseling porpose only. All data provided by users will be kept for further purpose. IF the data does not been used, it willl be deleted to avoid issues. Methods and instrument listed in this website does not proven dangerous or even illegal. Pusat Kaunseling do not make any waranties about the completeness, reliability and accuracy of this infomation.</h6>
					</div>
				</div>
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h5 class="text-center">Assessment</h5>
					</div>
					<div class="card-body">
						<div>
							<?php if ($app == 1) : ?>
									<?php foreach($list_gd as $l) { ?>
										<h6>GAD<a href="<?php echo base_url('index.php/') ?>test/gad7/<?php echo $l->gad_id; ?>" class="btn btn-primary float-right" >Answer</a></h6><br>
									<?php } ?>
									<?php foreach($list_pq as $l) { ?>
										<h6>PHQ<a href="<?php echo base_url('index.php/') ?>test/phq9/<?php echo $l->phq_id; ?>" class="btn btn-primary float-right" >Answer</a></h6><br>
									<?php } ?>
									<?php foreach($list_wh as $l) { ?>
										<h6>WHOOLEY<a href="<?php echo base_url('index.php/') ?>test/whooley/<?php echo $l->whooley_id; ?>" class="btn btn-primary float-right" >Answer</a></h6><br>
									<?php } ?>
									<?php foreach($list_ds as $l) { ?>
										<h6>DASS<a href="<?php echo base_url('index.php/') ?>test/dass/<?php echo $l->dass_id; ?>" class="btn btn-primary float-right">Answer</a></h6><br>
									<?php } ?>
									<?php foreach($list_ba as $l) { ?>
										<h6>BAI<a href="<?php echo base_url('index.php/') ?>test/bai/<?php echo $l->bai_id; ?>" class="btn btn-primary float-right" >Answer</a></h6><br>
									<?php } ?>
									<?php foreach($list_bd as $l) { ?>
										<h6>BDI<a href="<?php echo base_url('index.php/') ?>test/bdi/<?php echo $l->bdi_id; ?>" class="btn btn-primary float-right" >Answer</a></h6><br>
									<?php } ?>
									<?php foreach($list_mb as $l) { ?>
										<h6>MBTI<a href="<?php echo base_url('index.php/') ?>test/mbti/<?php echo $l->mbti_id; ?>" class="btn btn-primary float-right">Answer</a></h6><br>
									<?php } ?>
								<?php else : ?> 
										<h6 class="text-center text-danger">No Assessment</h6>
								<?php endif; ?>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>