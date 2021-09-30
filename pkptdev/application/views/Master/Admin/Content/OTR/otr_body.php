<div class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <div class="tab-content">

                    <table id="roboco" class="table table-striped table-valign-middle">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>GAD-7</th>
                                <th>PHQ9</th>
                                <th>WHOOLEY</th>
                                <th>DASS</th>
                                <th>BDI</th>
                                <th>BAI</th>
                                <th>MBTI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c = 1;?>
                            <?php foreach($otr as $o) :?>
                                <tr>
                                    <td><?php echo $c++;?></td>
                                    <?php if($o->login_user[0] == 'd'): ?>
                                        <?php foreach($this->admin_model->otr_student($o->login_user) as $std): ?>
                                        <td><?php echo $std->student_no; ?></td>
                                        <td><?php echo $std->student_name; ?></td>
                                        <?php endforeach; ?>
                                    <?php else :?>
                                        <?php foreach($this->admin_model->otr_staff($o->login_user) as $std): ?>
                                        <td><?php echo $std->staff_no; ?></td>
                                        <td><?php echo $std->staff_name; ?></td>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <td><?php echo $this->admin_model->otr_gad($o->login_user) ;?></td>
                                    <td><?php echo $this->admin_model->otr_phq($o->login_user) ;?></td>
                                    <td><?php echo $this->admin_model->otr_who($o->login_user) ;?></td>
                                    <td><?php echo $this->admin_model->otr_dass($o->login_user) ;?></td>
                                    <td><?php echo $this->admin_model->otr_bdi($o->login_user) ;?></td>
                                    <td><?php echo $this->admin_model->otr_bai($o->login_user) ;?></td>
                                    <td><?php echo $this->admin_model->otr_mbti($o->login_user) ;?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>