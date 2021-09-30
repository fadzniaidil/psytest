<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">NUMBER OF TEST PARTICIPANTS</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="pieBDI" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">TEST RESULT</h5>
                    </div>
                    <div class="card-body ">
                        <canvas id="barBDI" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>


            </div>

        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#minimal">0 - 13 : Minimal</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mild">14 - 19 : Mild</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#moderate">20 - 28 : Moderate</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#severe">29 - 63 : Severe</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div id="minimal" class="active tab-pane">
                            <table id="bdi1" class="table table-striped table-valign-middle">
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
                                            <?php foreach ($this->admin_model->bdi_otr0v1($o->login_user, 'MINIMAL') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_email; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bdi_otr0v2($o->login_user, 'MINIMAL') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_email; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="mild" class=" tab-pane">
                            <table id="bdi2" class="table table-striped table-valign-middle">
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
                                            <?php foreach ($this->admin_model->bdi_otr0v1($o->login_user, 'MILD') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_email; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bdi_otr0v2($o->login_user, 'MILD') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_email; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="moderate" class=" tab-pane">
                            <table id="bdi3" class="table table-striped table-valign-middle">
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
                                            <?php foreach ($this->admin_model->bdi_otr0v1($o->login_user, 'MODERATE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_email; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bdi_otr0v2($o->login_user, 'MODERATE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_email; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="severe" class=" tab-pane">
                            <table id="bdi4" class="table table-striped table-valign-middle">
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
                                            <?php foreach ($this->admin_model->bdi_otr0v1($o->login_user, 'SEVERE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_email; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bdi_otr0v2($o->login_user, 'SEVERE') as $y) : ?>
                                                <tr>

                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_email; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bdi_date; ?></td>
                                                    <td><?php echo $y->bdi_score; ?></td>
                                                    <td><?php echo $y->bdi_result; ?></td>
                                                    <td><?php echo $y->bdi_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/subaru1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bdi_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                <?php endforeach; ?>
                                                </tr>
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