<div class="content">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Apply Appointment</h3>
					</div>
					<div class="card-body">
						<form action='<?php echo base_url('index.php/')?>client/make_appt' method='POST'>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="client_name">Applicant Name</label>
										<input type="text" id="user_name" name="user_name" class="form-control form-control-sm" value="<?php echo $this->session->userdata('user_name'); ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="client_name">Session Type</label>
										<select class="custom-select" id="session_type" name="session_type" required>
											<option value="INDIVIDUAL">Individual</option>
											<option value="GROUP">Group</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="client_name">Service Type</label>
										<select class="custom-select" id="service_type" name="service_type" required>
											<option value="GUIDANCE">Guidance</option>
											<option value="COUNSELLING">Counselling</option>
										</select>
									</div>
									<div class="form-group">
										<label>Problem Type</label>
										<div class="form-check">
											<input type="checkbox" id="pt1" name="pt1" value="a" class="form-check-input">
											<label class="form-check-label">Academic</label>
										</div>
										<div class="form-check">
											<input type="checkbox" id="pt2" name="pt2" value="b" class="form-check-input">
											<label class="form-check-label">Career</label>
										</div>
										<div class="form-check">
											<input type="checkbox" id="pt3" name="pt3" value="c" class="form-check-input">
											<label class="form-check-label">Psychosocial</label>
										</div>
										<div class="form-check">
											<input type="checkbox" id="pt4" name="pt4" value="d" class="form-check-input">
											<label class="form-check-label">Financial</label>
										</div>
										<div class="form-check">
											<input type="checkbox" id="pt5" name="pt5" value="e" class="form-check-input">
											<label class="form-check-label">Family</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="client_name">Counsellor</label>
										<select class="custom-select" id="counselor" name="counselor" required>
											<?php foreach($counselor as $c ) { ?>
											<option value="<?php echo $c->login_user; ?>"><?php echo $c->staff_name; ?></option>
											<?php }?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="client_name">Appointment Date</label>
										<input type="date" id="appt_date" name="appt_date" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="client_name">Appointment Time</label>
										<select class="custom-select" id="appt_time" name="appt_time" required>
											<option value="09:00 am - 10:50 am">09:00 am - 10:50 am</option>
											<option value="11:00 am - 12:50 am">11:00 am - 12:50 am</option>
											<option value="02:30 pm - 04:00 pm">02:30 pm - 04:00 pm</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-check">
									<input type="checkbox" id="REQUESTED" name="REQUESTED" class="form-check-input" required>
									<label class="form-check-label">I have read and understood all the counselling terms and got the opportunity to ask questions and agree to begin counselling session.</label><br>
									<a href="">Click here to view counselling terms</a>
								</div>
							</div>
							<br>
							<button class="btn btn-primary btn-block" type="submit" id="usagi">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>