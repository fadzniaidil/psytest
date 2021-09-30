<div class="content">
	<div class="container">
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
													<th>Info</th>
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
													<td><a class="btn btn-primary" href="<?php echo base_url('index.php/');?>counselor/d1/<?php echo $l->student_id; ?>">More Info</a></td>
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
													<th>Info</th>
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
													<td><a class="btn btn-primary" href="<?php echo base_url('index.php/');?>counselor/d2/<?php echo $l->staff_id;?>">More Info</a></td>
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