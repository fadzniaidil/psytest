<div class="content">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card card-purple card-outline">
					<div class="card-header">
						<h6>Profile</h6>
					</div>
					<div class="card-body">
						<div class="float-right text-center">
							<img class="profile-user-img img-fluid img-square" src="<?php echo base_url() ?>assets/custom/img/<?php echo $pro['staff_id'];?>.png" alt="User profile picture">
						</div>
						<table>
							<tr>
								<td>Student ID </td>
								<td>: <?php echo $pro['staff_no'];?></td>
							</tr>
							<tr>
								<td>Name </td>
								<td>: <?php echo $pro['staff_name'];?></td>
							</tr>
							<tr>
								<td>Faculty </td>
								<td>: <?php echo $pro['staff_department'];?></td>
							</tr>
							<tr>
								<td>ICPP </td>
								<td>: <?php echo $pro['staff_icpp'];?></td>
							</tr>
							<tr>
								<td>Address</td>
								<td>: <?php echo $pro['staff_address'];?></td>
							</tr>
							<tr>
								<td>No Phone</td>
								<td>: <?php echo $pro['staff_phone'];?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card">
					<div class="card-header card-outline card-indigo">
						<div class="col">
							<form action="<?php echo base_url('index.php/') ?>counselor/add_test/<?php echo $pro['staff_id']; ?>" method="POST">
								<label class="float-left">Add new test : </label>

								<select id="add" name="add" class="custom-select rounded-0">
									<option value="gad">GAD</option>
									<option value="phq">PHQ</option>
									<option value="whooley">Whooley</option>
									<option value="dass">DASS</option>
									<option value="bai">BAI</option>
									<option value="bdi">BDI</option>
									<option value="mbti">MBTI</option>
								</select>
								<button class="btn bg-gradient-indigo float-right btn-block">Add</button>
							</form>
						</div>
					</div>

				</div>
				<div class="card">
					<div class="card-header">
							<label>Test taken by <?php echo $pro['staff_name']; ?></label>
							<select id="select_test" name="select_test" class="custom-select rounded-0">
								<option data-toggle="tab" onclick="clinical()" href="#clinical">Clinical</option>
								<option data-toggle="tab" onclick="gad()" href="#gad">GAD</option>
								<option data-toggle="tab" onclick="phq()" href="#phq">PHQ</option>
								<option data-toggle="tab" onclick="whooley()" href="#whooley">Whooley</option>
								<option data-toggle="tab" onclick="dass()" href="#dass">DASS</option>
								<option data-toggle="tab" onclick="bai()" href="#bai">BAI</option>
								<option data-toggle="tab" onclick="bdi()" href="#bdi">BDI</option>
								<option data-toggle="tab" onclick="mbti()" href="#mbti">MBTI</option>
							</select>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<div id="clinical" class="active tab-pane">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Session Date</th>
											<th>Result GAD</th>
											<th>Result PHQ</th>
											<th>Result Whooley</th>
											<th>Result DASS</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($clinical as $g) : ?>
											<tr>
												<td><?php echo $g->gad_session; ?></td>
												<td><?php echo $g->gad_result; ?>(<?php echo $g->gad_score; ?>)</td>
												<td><?php echo $g->phq_result; ?>(<?php echo $g->phq_score; ?>)</td>
												<td><?php echo $g->whooley_result; ?>(<?php echo $g->whooley_score; ?>)</td>
												<td>
													<h6>Stress : <?php echo $g->dass_stress;?>(<?php echo $g->stress_score; ?>)</h6>
													<h6>Anxiety : <?php echo $g->dass_anxiety;?>(<?php echo $g->anxiety_score; ?>)</h6>
													<h6>Depression : <?php echo $g->dass_depression;?>(<?php echo $g->depression_score; ?>)</h6>
												</td>
												<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_clinical/<?php echo $pro['staff_id'];?>/<?php echo $g->gad_session;?>">Print Data</a></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div id="gad" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Test_Score</th>
											<th>Test Result</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($gad as $g):?>
										<tr>
											<td><?php echo $g->gad_date ;?></td>
											<td><?php echo $g->gad_status ;?></td>
											<td><?php echo $g->gad_score ;?></td>
											<td><?php echo $g->gad_result ;?></td>
											<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_gad/<?php echo $pro['staff_id'];?>/<?php echo $g->gad_id;?>">Print Data</a></td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
							<div id="phq" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Test_Score</th>
											<th>Test Result</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($phq as $g):?>
										<tr>
											<td><?php echo $g->phq_date ;?></td>
											<td><?php echo $g->phq_status ;?></td>
											<td><?php echo $g->phq_score ;?></td>
											<td><?php echo $g->phq_result ;?></td>
											<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_phq/<?php echo $pro['staff_id'];?>/<?php echo $g->phq_id;?>">Print Data</a></td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
							<div id="whooley" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Test_Score</th>
											<th>Test Result</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($whooley as $g):?>
										<tr>
											<td><?php echo $g->whooley_date ;?></td>
											<td><?php echo $g->whooley_status ;?></td>
											<td><?php echo $g->whooley_score ;?></td>
											<td><?php echo $g->whooley_result ;?></td>
											<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_whooley/<?php echo $pro['staff_id'];?>/<?php echo $g->whooley_id;?>">Print Data</a></td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
							<div id="dass" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Stress Result</th>
											<th>Stress Score</th>
											<th>Anxiety Result</th>
											<th>Anxiety Score</th>
											<th>Depression Result</th>
											<th>Depression Score</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($dass as $g) : ?>
											<tr>
												<td><?php echo $g->dass_date; ?></td>
												<td><?php echo $g->dass_status; ?></td>
												<td><?php echo $g->dass_stress; ?></td>
												<td><?php echo $g->stress_score; ?></td>
												<td><?php echo $g->dass_anxiety; ?></td>
												<td><?php echo $g->anxiety_score; ?></td>
												<td><?php echo $g->dass_depression; ?></td>
												<td><?php echo $g->depression_score; ?></td>
												<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_dass/<?php echo $pro['staff_id'];?>/<?php echo $g->dass_id;?>">Print Data</a></td>

											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div id="bai" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Test_Score</th>
											<th>Test Result</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($bai as $g):?>
										<tr>
											<td><?php echo $g->bai_date ;?></td>
											<td><?php echo $g->bai_status ;?></td>
											<td><?php echo $g->bai_score ;?></td>
											<td><?php echo $g->bai_result ;?></td>
											<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_bai/<?php echo $pro['staff_id'];?>/<?php echo $g->bai_id;?>">Print Data</a></td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
							<div id="bdi" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Test_Score</th>
											<th>Test Result</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($bdi as $g):?>
										<tr>
											<td><?php echo $g->bdi_date ;?></td>
											<td><?php echo $g->bdi_status ;?></td>
											<td><?php echo $g->bdi_score ;?></td>
											<td><?php echo $g->bdi_result ;?></td>
											<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_bdi/<?php echo $pro['staff_id'];?>/<?php echo $g->bdi_id;?>">Print Data</a></td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
							<div id="mbti" class="tab-pane">
								<table class="table table-striped table-valign-middle">
									<thead>
										<tr>
											<th>Test Date</th>
											<th>Test Status</th>
											<th>Test Result</th>
											<th>Info</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($mbti as $g):?>
										<tr>
											<td><?php echo $g->mbti_date ;?></td>
											<td><?php echo $g->mbti_status ;?></td>
											<td><?php echo $g->mbti_result ;?></td>
											<td><a class="btn bg-gradient-indigo" href="<?php echo base_url('index.php/')?>converter/d2_mbti/<?php echo $pro['staff_id'];?>/<?php echo $g->mbti_id;?>">Print Data</a></td>
										</tr>
										<?php endforeach;?>
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