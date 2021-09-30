<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assets/custom/img/<?php echo $this->session->userdata('user_id');?>.png" alt="User profile picture">
						</div>
						<br>
						<h3 class="profile-username text-center"><?php echo $this->session->userdata('user_name');?></h3>
						<br>
						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<span class="brand-text font-weight-light"><?php echo $this->session->userdata('user_no');?></span>
							</li>
							<li class="list-group-item">
								<span class="brand-text font-weight-light"><?php echo $this->session->userdata('user_place');?></span>
							</li>
							<li class="list-group-item">
								<span class="brand-text font-weight-light"><?php echo $this->session->userdata('user_email');?></span>
							</li>
							<li class="list-group-item">
								<span class="brand-text font-weight-light"><?php echo $this->session->userdata('user_phone');?><span>
							</li>
						</ul>

						<a href="<?php echo base_url('index.php/'); ?>login/logout" class="btn btn-primary btn-block"><b>Logout</b></a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card card-primary card-outline">
					<div class="card-header p-2">
						<div class="text-center">
							<h5>Appointment</h5>
						</div>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<div>
								<h6>Add new appointment<a href="<?php echo base_url('index.php/'); ?>client/appointment" class="btn btn-primary float-right">More</a></h6><br>
								<h6>View history appointment<a href="<?php echo base_url('index.php/'); ?>client/history" class="btn btn-primary float-right">More</a></h6><br>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-primary card-outline">
					<div class="card-header p-2">
						<div class="text-center">
							<h5>Assessment</h5>
						</div>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<div>
								<?php if ($app == 1) : ?>
									<table class="w-100">
										<?php foreach($list_gd as $l) { ?>
										<tr>
											<td>GAD</td>
											<td class="float-right text-danger">Not Yet Answered</td>
											<td><a href="<?php echo base_url('index.php/') ?>test/gad7/<?php echo $l->gad_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('gad_id',$l->gad_id); ?>' >Answer</a></td>
										</tr>
										<?php } ?>
										<?php foreach($list_pq as $l) { ?>
											<tr>
												<td>PHQ</td>
												<td class="float-right text-danger">Not Yet Answered</td>
												<td><a href="<?php echo base_url('index.php/') ?>test/phq9/<?php echo $l->phq_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('phq_id',$l->phq_id); ?>'>Answer</a></td>
											</tr>
										<?php } ?>
										<?php foreach($list_wh as $l) { ?>
											<tr>
												<td>Whooley</td>
												<td class="float-right text-danger">Not Yet Answered</td>
												<td><a href="<?php echo base_url('index.php/') ?>test/whooley/<?php echo $l->whooley_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('whooley_id',$l->whooley_id); ?>'>Answer</a></td>
											</tr>
										<?php } ?>
										<?php foreach($list_ds as $l) { ?>
											<tr>
												<td>DASS</td>
												<td class="float-right text-danger">Not Yet Answered</td>
												<td><a href="<?php echo base_url('index.php/') ?>test/dass/<?php echo $l->dass_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('dass_id',$l->dass_id); ?>'>Answer</a></td>
											</tr>
										<?php } ?>
										<?php foreach($list_ba as $l) { ?>
											<tr>
												<td>BAI</td>
												<td class="float-right text-danger">Not Yet Answered</td>
												<td><a href="<?php echo base_url('index.php/') ?>test/bai/<?php echo $l->bai_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('bai_id',$l->bai_id); ?>'>Answer</a></td>
											</tr>
										<?php } ?>
										<?php foreach($list_bd as $l) { ?>
											<tr>
												<td>BDI</td>
												<td class="float-right text-danger">Not Yet Answered</td>
												<td><a href="<?php echo base_url('index.php/') ?>test/bdi/<?php echo $l->bdi_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('bdi_id',$l->bdi_id); ?>'>Answer</a></td>
											</tr>
										<?php } ?>
										<?php foreach($list_mb as $l) { ?>
											<tr>
												<td>MBTI</td>
												<td class="float-right text-danger">Not Yet Answered</td>
												<td><a href="<?php echo base_url('index.php/') ?>test/mbti/<?php echo $l->mbti_id; ?>" class="btn btn-primary float-right" onclick='<?php $this->session->set_userdata('mbti_id',$l->mbti_id); ?>'>Answer</a></td>
											</tr>
										<?php } ?>
									</table>
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
</div>