<div class="content">
    <div class="row">
        <div class="col">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">NUMBER OF TEST PARTICIPANTS</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="pieDASS" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">TEST RESULT</h5>
                    </div>
                    <div class="card-body ">
                        <canvas id="barDASS" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>


            </div>

        </div>
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div id="depression" class="active tab-pane">
                        <table id="dass" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>PHONE NO.</th>
                                    <th>DATE TEST</th>
                                    <th>STRESS</th>
                                    <th>ANXIETY</th>
                                    <th>DEPRESSION</th>
                                    <th>ACTION</th>
                                    <th>INFO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->dass_otr0v1($o->login_user) as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->dass_date; ?></td>
                                                <td><?php echo $y->dass_stress; ?></td>
                                                <td><?php echo $y->dass_anxiety; ?></td>
                                                <td><?php echo $y->dass_depression; ?></td>
                                                <td><?php echo $y->dass_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/towa" method='POST'>
                                                        <button name="gg" value="<?php echo $y->dass_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->dass_otr0v2($o->login_user) as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->dass_date; ?></td>
                                                <td><?php echo $y->dass_stress; ?></td>
                                                <td><?php echo $y->dass_anxiety; ?></td>
                                                <td><?php echo $y->dass_depression; ?></td>
                                                <td><?php echo $y->dass_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/towa1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->dass_id;?>" class="btn btn-block btn-default">Print PDF</button>   
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