<div class="content">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h5 class="text-center">List of Appointment</h5>
					</div>
					<div class="card-body table-responsive">
						<table class="table table-hover text-nowrap">
							<thead>
								<tr>
									<th>Appointment Date</th>
									<th>Appointment Time</th>
									<th>Session Type</th>
									<th>Service Type</th>
									<th>Counselor</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($history as $h) { ?>
								<tr>
									<td><?php echo $h->appt_date; ?></td>
									<td><?php echo $h->appt_time; ?></td>
									<td><?php echo $h->appt_session; ?></td>
									<td><?php echo $h->appt_service; ?></td>
									<td><?php echo $h->staff_name; ?></td>
									<td><?php echo $h->appt_status; ?></td>
								</tr>
								<?php }?>
							</tbody>
						</table>
						<div class="card-footer">
							<a href="<?php echo base_url('index.php/'); ?>client/appointment" class="btn btn-primary btn-block">Add Appointment</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>