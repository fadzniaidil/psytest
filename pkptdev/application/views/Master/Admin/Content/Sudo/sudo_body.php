<div class="content">
	<div class="row">
		<div class="col">
            <div class="card card-info collapsed-card">
                <div class="card-header">
    				<h4 class="card-title">Counselor Account</h4>
	    			<div class="card-tools">
	    				<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
	    			</div>
	    		</div>
	    		<div class="card-body">
	    			<table class="table table-bordered">
	    				<thead>
	    					<tr>
	    						<th>Counselor ID</th>
	    						<th>Counselor Name</th>
	    						<th>Changes</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					<?php foreach($counselor as $c):?>
	    						<tr>
	    							<td><?php echo $c->staff_id?></td>
	    							<td><?php echo $c->staff_name?></td>
	    							<td><a class="btn btn-primary" href="<?php echo base_url('index.php/')?>admin/exchange/<?php echo $c->staff_id?>">Change Privilage</a></td>
	    						</tr>
	    					<?php endforeach?>
	    				</tbody>
	    			</table>
	    		</div>
            </div>
            <div class="card card-info collapsed-card">
            	<div class="card-header">
    				<h4 class="card-title">Revert Account</h4>
	    			<div class="card-tools">
	    				<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
	    			</div>
	    		</div>
	    		<div class="card-body">
	    			<table class="table table-bordered">
	    				<thead>
	    					<tr>
	    						<th>ID</th>
	    						<th>Counselor Name</th>
	    						<th>Changes</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					<?php foreach($temp as $c):?>
	    						<tr>
	    							<td><?php echo $c->staff_id?></td>
	    							<td><?php echo $c->staff_name?></td>
	    							<td><a class="btn btn-primary" href="<?php echo base_url('index.php/')?>admin/revert/<?php echo $c->staff_id?>">Revert Privilage</a></td>
	    						</tr>
	    					<?php endforeach?>
	    					<?php foreach($temp2 as $c2):?>
	    						<tr>
	    							<td><?php echo $c2->staff_id?></td>
	    							<td><?php echo $c2->staff_name?></td>
	    							<td><a class="btn btn-primary" href="<?php echo base_url('index.php/')?>admin/revert2/<?php echo $c2->staff_id?>">Revert Privilage</a></td>
	    						</tr>
	    					<?php endforeach?>
	    				</tbody>
	    			</table>
	    		</div>
            </div>
             <div class="card card-info collapsed-card">
            	<div class="card-header">
    				<h4 class="card-title">Other Account</h4>
	    			<div class="card-tools">
	    				<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
	    			</div>
	    		</div>
	    		<div class="card-body">
	    			<?php $obisa =1;?>
		    			<table id="iofi" class="table table-bordered ">
		    				<thead>
		    					<tr>
		    						<th>No</th>
		    						<th>ID</th>
		    						<th>Staff Name</th>
		    						<th>Change</th>
		    					</tr>
		    				</thead>
		    				<tbody>
		    					<?php foreach($xk as $x):?>
		    					<tr>
		    						<td><?php echo $obisa++;?></td>
		    						<td><?php echo $x->staff_no;?></td>
		    						<td><?php echo $x->staff_name;?></td>
		    						<td><a class="btn btn-primary" href="<?php echo base_url('index.php/')?>admin/exchange2/<?php echo $x->staff_id?>">Change Privilage</a></td>
		    					</tr>
		    					<?php endforeach;?>
		    				</tbody>
		    			</table>
	    		</div>
            </div>
		</div>
	</div>
</div>