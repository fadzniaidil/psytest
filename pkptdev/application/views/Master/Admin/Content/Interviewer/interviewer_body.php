<div class="content">
	<div class="row">
		<div class="col">
			<div class="card card-info collapsed-card">
				<div class="card-header">
    				<h4 class="card-title">Interview Candidate</h4>
	    			<div class="card-tools">
	    				<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
	    			</div>
	    		</div>
				<div class="card-body">
					<table id="miko" class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>ID</th>
								<th>Staff Name</th>
								<th class="text-center">MBTI Test</th>
							</tr>
						</thead>
						<tbody>
							<?php $usada = 1;?>
							<?php foreach($pekora as $p):?>
							<tr>
								<td><?php echo $usada++ ;?></td>
								<td><?php echo $p->staff_no ;?></td>
								<td><?php echo $p->staff_name ;?></td>
								<td><a class="btn btn-primary btn-block" href="<?php echo base_url('index.php/')?>admin/give_task/<?php echo $p->staff_id;?>">Give Test</a></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card card-info collapsed-card">
				<div class="card-header">
					<h4 class="card-title">Interview Result</h4>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				<div class="card-body">
					<table id="ouji" class="table table-bordered">
						<thead>
							<tr>
								<th>Staff No</th>
								<th>Staff Name</th>
								<th>Department</th>
								<th>Result</th>
								<th class="text-center">Info</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($ayame as $a):?>
							<tr>
								<td><?php echo $a->staff_no;?></td>
								<td><?php echo $a->staff_name;?></td>
								<td><?php echo $a->staff_department;?></td>
								<td><?php echo $a->mbti_result;?></td>
								<td><a href="<?php echo base_url('index.php/');?>converter/d2_mbti/<?php echo $a->mbti_user;?>/<?php echo $a->mbti_id;?>" class="btn btn-primary btn-block">Print Data</a></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>