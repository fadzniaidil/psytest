<div class="content">
	<div class="row">
		<div class="col">
			<div class="card card-info">
				<div class="card-header">
    				<h4 class="card-title">Orientation Student</h4>
	    		</div>
	    		<div class="card-body">
	    			
	    			<div class="row">
				    			<div class="col-sm-3">
					    			<h5 class="text-center">Orientation Test <?php echo date('Y');?> : </h5>
				    			</div>
				    			<div class="col">
				    				<a class="btn btn-primary btn-block float-right" href="<?php echo base_url('index.php/') ;?>admin/orio_test/">Distribute Test</a>
				    			</div>
			    			</div>
	    			<br>
	    			<hr>
	    			<h6>Report <?php echo date('Y')?> for orientation</h6>
	    			<div class="form-group">
	    				<form action="<?php echo base_url('index.php/')?>converter/orio_report" method="POST">
			    			<div class="row">
				    			<div class="col-sm-6">
					    			<select name="ceres" class="form-control" required>
					    				<option value="GAD">GAD</option>
					    				<option value="PHQ">PHQ</option>
					    				<option value="Whooley">Whooley</option>
					    				<option value="DASS">DASS</option>
					    			</select>
				    			</div>
				    			<div class="col-sm-6">
				    				<button class="btn btn-primary btn-block">Print Excel</button>
				    			</div>
			    			</div>
	    				</form>
	    			</div>
	    		</div>
			</div>
			<div class="card">
				<div class="card-header">
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#orio1">GAD</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#orio2">PHQ</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#orio3">Whooley</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#orio4">DASS</a></li>
                    </ul>
                </div>
				<div class="card-body">
					<div class="tab-content">
						<div id="orio1" class="active tab-pane">
							<table id="o1" class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Result</th>
										<th>PDF</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($orio1 as $o):?>
									<tr>
										<td><?php echo $o->student_no ;?></td>
										<td><?php echo $o->student_name ;?></td>
										<td><?php echo $o->gad_result ;?></td>
										<td>
											<form action="<?php echo base_url('index.php/')?>converter/hk" method='POST'>
                                                 <button name="gg" value="<?php echo $o->gad_id;?>" class="btn btn-block btn-primary">Print PDF</button>   
                                             </form>
                                         </td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
						<div id="orio2" class="tab-pane">
							<table id="o2" class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Result</th>
										<th>PDF</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($orio2 as $o):?>
									<tr>
										<td><?php echo $o->student_no ;?></td>
										<td><?php echo $o->student_name ;?></td>
										<td><?php echo $o->phq_result ;?></td>
										<td>
											<form action="<?php echo base_url('index.php/')?>converter/hk" method='POST'>
                                                 <button name="gg" value="<?php echo $o->phq_id;?>" class="btn btn-block btn-primary">Print PDF</button>   
                                             </form>

										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
						<div id="orio3" class="tab-pane">
							<table id="o3" class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Result</th>
										<th>PDF</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($orio3 as $o):?>
									<tr>
										<td><?php echo $o->student_no ;?></td>
										<td><?php echo $o->student_name ;?></td>
										<td><?php echo $o->whooley_result ;?></td>
										<td>
											<form action="<?php echo base_url('index.php/')?>converter/hk" method='POST'>
                                                 <button name="gg" value="<?php echo $o->whooley_id;?>" class="btn btn-block btn-primary">Print PDF</button>   
                                             </form>

										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
						<div id="orio4" class="tab-pane">
							<table id="o4" class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Stress Result</th>
										<th>Anxiety Result</th>
										<th>Depression Result</th>
										<th>PDF</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($orio4 as $o):?>
									<tr>
										<td><?php echo $o->student_no ;?></td>
										<td><?php echo $o->student_name ;?></td>
										<td><?php echo $o->dass_stress ;?></td>
										<td><?php echo $o->dass_anxiety ;?></td>
										<td><?php echo $o->dass_depression ;?></td>
										<td>
											<form action="<?php echo base_url('index.php/')?>converter/hk" method='POST'>
                                                 <button name="gg" value="<?php echo $o->dass_id;?>" class="btn btn-block btn-primary">Print PDF</button>   
                                             </form>

										</td>
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