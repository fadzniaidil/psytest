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
													<th>Applicant Name</th>
													<th>ID</th>
													<th>Service Catergory</th>
													<th>Service Type</th>
													<th>Problem Type</th>
													<th>Appointment Date</th>
													<th>Appointment Time</th>
													<th class="text-center" colspan="2">Approve</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($stu as $a): ?>
												<tr>
													<td><?php echo $a->student_name; ?></td>
													<td>
														<?php echo $a->appt_client; ?>
													</td>
													<td><?php echo $a->appt_session; ?></td>
													<td><?php echo $a->appt_service; ?></td>
													<td>
														<?php $name = $a->appt_prob; ?>
														<?php if(strlen($name) == 0): ?>
															<h6>None</h6>
														<?php else: ?>
															<?php $ds = $this->counselor_model->prob_sort($name); ?>
															<?php foreach( $ds as $k):?>
																<h6><?php echo $k;?></h6>
															<?php endforeach;?>
														<?php endif; ?>
													</td>
													<td><?php echo $a->appt_date;?></td>
													<td><?php echo $a->appt_time; ?></td>

													<td><a class="btn btn-success" href="<?php echo base_url('index.php/')?>counselor/accept_appt/<?php echo $a->appt_id?>/<?php echo $a->appt_client ?>/<?php echo $a->appt_date?>">Accept</a></td>
													<td><a class="btn btn-danger" href="<?php echo base_url('index.php/')?>counselor/reject_appt/<?php echo $a->appt_id?>/<?php echo $a->appt_client ?>/<?php echo $a->appt_date?>">Reject</a></td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
									<div id="lecturer" class="tab-pane">
										<table class="table table-striped table-valign-middle">
											<thead>
												<tr>
													<th>Applicant Name</th>
													<th>ID</th>
													<th>Service Catergory</th>
													<th>Service Type</th>
													<th>Problem Type</th>
													<th>Appointment Date</th>
													<th>Appointment Time</th>
													<th class="text-center" colspan="2">Approve</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($sta as $a): ?>
												<tr>
													<td><?php echo $a->staff_name; ?></td>
													<td>
														<?php echo $a->appt_client; ?>
													</td>
													<td><?php echo $a->appt_session; ?></td>
													<td><?php echo $a->appt_service; ?></td>
													<td>
														<?php $name = $a->appt_prob; ?>
														<?php if(strlen($name) == 0): ?>
															<h6>None</h6>
														<?php else: ?>
															<?php $ds = $this->counselor_model->prob_sort($name); ?>
															<?php foreach( $ds as $k):?>
																<h6><?php echo $k;?></h6>
															<?php endforeach;?>
														<?php endif; ?>
													</td>
													<td><?php echo $a->appt_date;?>
													</td>
													<td><?php echo $a->appt_time; ?></td>

													<td><a class="btn btn-primary" href="<?php echo base_url('index.php/')?>counselor/accept_appt/<?php echo $a->appt_id?>/<?php echo $a->appt_client ?>/<?php echo $a->appt_date?>">Accept</a></td>
													<td><a class="btn btn-primary" href="<?php echo base_url('index.php/')?>counselor/reject_appt/<?php echo $a->appt_id?>/<?php echo $a->appt_client ?>/<?php echo $a->appt_date?>">Reject</a></td>
												</tr>
												<?php endforeach; ?>
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