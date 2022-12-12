<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">NUMBER OF TEST PARTICIPANTS</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="piePHQ" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card -->

            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">TEST RESULT</h5>
                    </div>
                    <div class="card-body ">
                        <canvas id="barPHQ" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card -->

            </div>

        </div>
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills float-right">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#none">0 - 4 : None</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mild">5 - 9 : Mild</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#moderate">10 - 14 : Moderate</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#modsevere">15 - 19 : Moderately Severe</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#severe">20 - 27 : Severe</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div id="none" class="active tab-pane">
                        <table id="phq91" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>PHONE NO.</th>
                                    <th>DATE TEST</th>
                                    <th>SCORE</th>
                                    <th>RESULT</th>
                                    <th>ACTION</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v1($o->login_user, 'NONE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_email; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v2($o->login_user, 'NONE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_email; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="mild" class=" tab-pane">
                        <table id="phq92" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>PHONE NO.</th>
                                    <th>DATE TEST</th>
                                    <th>SCORE</th>
                                    <th>RESULT</th>
                                    <th>ACTION</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v1($o->login_user, 'MILD') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_email; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v2($o->login_user, 'MILD') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_email; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="moderate" class=" tab-pane">
                        <table id="phq93" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>PHONE NO.</th>
                                    <th>DATE TEST</th>
                                    <th>SCORE</th>
                                    <th>RESULT</th>
                                    <th>ACTION</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v1($o->login_user, 'MODERATE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_email; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v2($o->login_user, 'MODERATE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_email; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="modsevere" class=" tab-pane">
                        <table id="phq94" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>PHONE NO.</th>
                                    <th>DATE TEST</th>
                                    <th>SCORE</th>
                                    <th>RESULT</th>
                                    <th>ACTION</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v1($o->login_user, 'MODERATE SEVERE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_email; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                               <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v2($o->login_user, 'MODERATE SEVERE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_email; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                              <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="severe" class=" tab-pane">
                        <table id="phq95" class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAME</th>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>PHONE NO.</th>
                                    <th>DATE TEST</th>
                                    <th>SCORE</th>
                                    <th>RESULT</th>
                                    <th>ACTION</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1; ?>
                                <?php foreach ($otr as $o) : ?>

                                    <?php if ($o->login_user[0] == 'd') : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v1($o->login_user, 'SEVERE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->student_name; ?></td>
                                                <td><?php echo $y->student_no; ?></td>
                                                <td><?php echo $y->student_email; ?></td>
                                                <td><?php echo $y->student_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                               <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($this->admin_model->phq_otr0v2($o->login_user, 'SEVERE') as $y) : ?>
                                            <tr>
                                                <td><?php echo $c++; ?></td>
                                                <td><?php echo $y->staff_name; ?></td>
                                                <td><?php echo $y->staff_no; ?></td>
                                                <td><?php echo $y->staff_email; ?></td>
                                                <td><?php echo $y->staff_phone; ?></td>
                                                <td><?php echo $y->phq_date; ?></td>
                                                <td><?php echo $y->phq_score; ?></td>
                                                <td><?php echo $y->phq_result; ?></td>
                                                <td><?php echo $y->phq_status; ?></td>
                                                <td>
                                                        <form action="<?php echo base_url('index.php/')?>converter/ina1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->phq_id;?>" class="btn btn-block btn-default">Print PDF</button>   
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
