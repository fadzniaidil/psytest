<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">NUMBER OF TEST PARTICIPANTS</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="pieBAI" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h5 class="text-center">TEST RESULT</h5>
                    </div>
                    <div class="card-body ">
                        <canvas id="barBAI" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>


            </div>

        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#low">0 - 21 : Low</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#moderate">22 - 35 : Moderate</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#severe">36 - 63: Severe</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div id="low" class="active tab-pane">
                            <table id="bai1" class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>NAME</th>
                                        <th>ID</th>
                                        <th>PHONE NO.</th>
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
                                            <?php foreach ($this->admin_model->bai_otr0v1($o->login_user, 'LOW') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bai_score; ?></td>
                                                    <td><?php echo $y->bai_result; ?></td>
                                                    <td><?php echo $y->bai_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/luna" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bai_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bai_otr0v2($o->login_user, 'LOW') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bai_score; ?></td>
                                                    <td><?php echo $y->bai_result; ?></td>
                                                    <td><?php echo $y->bai_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/luna1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bai_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="moderate" class=" tab-pane">
                            <table id="bai2" class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>NAME</th>
                                        <th>ID</th>
                                        <th>PHONE NO.</th>
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
                                            <?php foreach ($this->admin_model->bai_otr0v1($o->login_user, 'MODERATE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bai_score; ?></td>
                                                    <td><?php echo $y->bai_result; ?></td>
                                                    <td><?php echo $y->bai_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/luna" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bai_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bai_otr0v2($o->login_user, 'MODERATE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bai_score; ?></td>
                                                    <td><?php echo $y->bai_result; ?></td>
                                                    <td><?php echo $y->bai_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/luna1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bai_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="severe" class=" tab-pane">
                            <table id="bai3" class="table table-striped table-valign-middle">
                               <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>NAME</th>
                                        <th>ID</th>
                                        <th>PHONE NO.</th>
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
                                            <?php foreach ($this->admin_model->bai_otr0v1($o->login_user, 'SEVERE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->student_name; ?></td>
                                                    <td><?php echo $y->student_no; ?></td>
                                                    <td><?php echo $y->student_phone; ?></td>
                                                    <td><?php echo $y->bai_score; ?></td>
                                                    <td><?php echo $y->bai_result; ?></td>
                                                    <td><?php echo $y->bai_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/luna" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bai_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?php foreach ($this->admin_model->bai_otr0v2($o->login_user, 'SEVERE') as $y) : ?>
                                                <tr>
                                                    <td><?php echo $c++; ?></td>
                                                    <td><?php echo $y->staff_name; ?></td>
                                                    <td><?php echo $y->staff_no; ?></td>
                                                    <td><?php echo $y->staff_phone; ?></td>
                                                    <td><?php echo $y->bai_score; ?></td>
                                                    <td><?php echo $y->bai_result; ?></td>
                                                    <td><?php echo $y->bai_status; ?></td>
                                                    <td><form action="<?php echo base_url('index.php/')?>converter/luna1" method='POST'>
                                                        <button name="gg" value="<?php echo $y->bai_id;?>" class="btn btn-block btn-default">Print PDF</button>   
                                                        </form></td>
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