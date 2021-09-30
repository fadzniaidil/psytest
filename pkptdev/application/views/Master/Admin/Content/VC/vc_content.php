<div class="content">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col">
    			<?php foreach($counselor as $couns):?>
    			<div class="card card-info collapsed-card">
    				<div class="card-header">
    					<h4 class="card-title">Counselor : <?php echo $couns->staff_name;?></h4>
	    				<div class="card-tools">
	    					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
	    				</div>
	    			</div>
    				<div class="card-body">
    						<table class="table table-bordered">
    							<thead>
    								<tr>
		 								<th>Client</th>
		 								<th>Client ID</th>
		 								<th>Client Name</th>
		 								<th>Faculty/Department</th>
		 								<th>No Phone</th>
    								</tr>
    							</thead>
    							<tbody>
    								<?php foreach($this->admin_model->get_client($couns->staff_id) as $a):?>
    									<?php if($a->appt_client[0] == 'd'):?>
    										<?php foreach($this->admin_model->get_stu($a->appt_client) as $d):?>
			    								<tr>
			    									<td><img class="profile-user-img img-fluid img-square" src="<?php echo base_url() ?>assets/custom/img/<?php echo $d->student_id;?>.png" alt="User profile picture"></td>
			    									<td><?php echo $d->student_no ;?></td>
			    									<td><?php echo $d->student_name ;?></td>
			    									<td><?php echo $d->student_faculty ;?></td>
			    									<td><?php echo $d->student_phone ;?></td>
			    								</tr>
			    							<?php endforeach;?>
		    							<?php else:?>
		    								<?php foreach($this->admin_model->get_stu($a->appt_client) as $d):?>
			    								<tr>
			    									<td><img class="profile-user-img img-fluid img-square" src="<?php echo base_url() ?>assets/custom/img/<?php echo $d->staff_id;?>.png" alt="User profile picture"></td>
			    									<td><?php echo $d->staff_no ;?></td>
			    									<td><?php echo $d->staff_name ;?></td>
			    									<td><?php echo $d->staff_department ;?></td>
			    									<td><?php echo $d->staff_phone ;?></td>
			    								</tr>
			    							<?php endforeach;?>
		    							<?php endif;?>
    								<?php endforeach;?>
    							</tbody>
    						</table>
    				</div>
    			</div>
    		<?php endforeach;?>
    		</div>
    	</div>
    </div>
</div>