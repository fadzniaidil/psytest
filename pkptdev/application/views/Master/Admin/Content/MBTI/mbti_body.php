<div class="content">
	<div class="row">
		<div class="col">
			<div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div id="depression" class="active tab-pane">
                        <table id="mbti" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>PHONE NO.</th>
                                    <th>RESULT</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->mbti_otr0v1($o->login_user) as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->mbti_result; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ame" method='POST'>
                                                        <button name="gg" value="<?php echo $y->mbti_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->mbti_otr0v2($o->login_user) as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->mbti_result; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ame1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->mbti_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

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