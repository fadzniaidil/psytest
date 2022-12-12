<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card card-purple card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assets/custom/img/<?php echo $this->session->userdata('user_id');?>.png" alt="User profile picture">
						</div>
						<br>
						<h3 class="profile-username text-center"><?php echo $this->session->userdata('user_name');?></h3>
						<br>
						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<span class="brand-text font-weight-light float-right"><?php echo $this->session->userdata('user_no');?></span>
							</li>
							<li class="list-group-item">
								<span class="brand-text font-weight-light float-right"><?php echo $this->session->userdata('user_place');?></span>
							</li>
							<li class="list-group-item">
								<span class="brand-text font-weight-light float-right"><?php echo $this->session->userdata('user_email');?></span>
							</li>
							<li class="list-group-item">
								<span class="brand-text font-weight-light float-right"><?php echo $this->session->userdata('user_phone');?></span>
							</li>
						</ul>
						<a href="<?php echo base_url('index.php/'); ?>login/logout" class="btn bg-gradient-purple btn-block"><b>Logout</b></a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-4">
						<div class="info-box mb-3">
							<span class="info-box-icon bg-info elevation-1">
								<i class="fas fa-user"></i>
							</span>
							<div class="info-box-content">
								<span class="info-box-text">Student</span>
								<span class="info-box-number"><?php echo $vstudent; ?></span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box mb-3">
							<span class="info-box-icon bg-danger elevation-1">
								<i class="fas fa-user-plus"></i>
							</span>
							<div class="info-box-content">
								<span class="info-box-text">Staff</span>
								<span class="info-box-number"><?php echo $vstaff; ?></span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box mb-3">
							<span class="info-box-icon bg-success elevation-1">
								<i class="ion ion-stats-bars"></i>
							</span>
							<div class="info-box-content">
								<span class="info-box-text">Total</span>
								<span class="info-box-number"><?php echo $vstudent + $vstaff;?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header">
								<ul class="nav nav-pills float-right">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#student">Student</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#lecturer">Staff</a></li>
								</ul>
							</div>
							<div class="card-body">
								<div class="tab-content">
									<div id="student" class="active tab-pane">
										<table class="table table-striped table-valign-middle">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Email</th>
													<th>Faculty</th>
													<th>Phone</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($list_stu as $l) { ?>
												<tr>
													<td><?php echo $l->student_no ;?></td>
													<td><?php echo $l->student_name ;?></td>
													<td><?php echo $l->student_email ;?></td>
													<td><?php echo $l->student_faculty ;?></td>
													<td><?php echo $l->student_phone ;?></td>
												</tr>
												<?php }?>
											</tbody>
										</table>
									</div>
									<div id="lecturer" class="tab-pane">
										<table class="table table-striped table-valign-middle">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Email</th>
													<th>Department</th>
													<th>Phone</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($list_sta as $l) { ?>
												<tr>
													<td><?php echo $l->staff_no ;?></td>
													<td><?php echo $l->staff_name ;?></td>
													<td><?php echo $l->staff_email ;?></td>
													<td><?php echo $l->staff_department ;?></td>
													<td><?php echo $l->staff_phone ;?></td>
												</tr>
												<?php }?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>