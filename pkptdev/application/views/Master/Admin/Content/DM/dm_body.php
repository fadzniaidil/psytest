<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card card-info collapsed-card">
                    <div class="card-header">
                        <h4 class="card-title">Data Client</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-sm-3">
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Year : <?php echo date('Y');?></a>
                                    <a class="nav-link" id="vert-tabs-home" data-toggle="pill" href="#tab2" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Custom Date</a>
                                </div>
                            </div>
                            <div class="col-7 col-sm-9">
                                <div class="tab-content" id="vert-tabs-tabContent" >
                                    <div class="tab-pane text-left fade show active" id="tab1" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                         <div class="form-group">
                                             <form action='<?php echo base_url('index.php/')?>converter/client_data_fixed' method='POST'>
                                               <label>Client :</label>
                                               <select name="client_class" class="form-control" required>
                                                   <option value="student" selected>Student</option>
                                                   <option value="staff">Staff</option>
                                               </select>
                                               <br>
                                               <label>Month :</label>
                                               <select name="what_month" class="form-control" required>
                                                   <option value="1" selected>January</option>
                                                   <option value="2">February</option>
                                                   <option value="3">March</option>
                                                   <option value="4">April</option>
                                                   <option value="5">May</option>
                                                   <option value="6">Jun</option>
                                                   <option value="7">July</option>
                                                   <option value="8">August</option>
                                                   <option value="9">September</option>
                                                   <option value="10">October</option>
                                                   <option value="11">November</option>
                                                   <option value="12">December</option>
                                               </select>
                                               <br>
                                               <button name="data_gen" class="btn btn-primary btn-block" value="gen_pdf">Generate PDF</button>
                                               <button name="data_gen" class="btn btn-primary btn-block" value="gen_excel">Generate Excel</button>
                                             </form>
                                             </div>
                                      </div>
                                      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                        <div class="form-group">
                                            <form action='<?php echo base_url('index.php/')?>converter/client_data_custom' method='POST'>
                                                <label>Client :</label>
                                                <select name="client_class" class="form-control" required>
                                                    <option value="student" selected>Student</option>
                                                    <option value="staff">Staff</option>
                                                </select>
                                                <br>
                                                <label>Start Date :</label>
                                                <input class="form-control" type="date" name="what_start" required>
                                                <br>
                                                <label>End Date</label>
                                                <input class="form-control" type="date" name="what_end" required>
                                                <br>
                                                <button name="data_gen" class="btn btn-primary btn-block" value="gen_pdf">Generate PDF</button>
                                                <button name="data_gen" class="btn btn-primary btn-block" value="gen_excel">Generate Excel</button>
                                            </form>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-info collapsed-card">
                    <div class="card-header">
                        <h4 class="card-title">Data Psychometric</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                       <div class="row">
                          <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#dp1" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Year : <?php echo date('Y');?></a>
                              <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#dp2" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Custom Date</a>
                            </div>
                          </div>
                          <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="dp1" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                 <div class="form-group">
                                    <form action="<?php echo base_url('index.php/')?>converter/data_psycho" method="POST">
                                            <label>Psychometric Test :</label>
                                            <select name="what_test" class="form-control" required>
                                                <option value="GAD" selected>GAD</option>
                                                <option value="PHQ">PHQ</option>
                                                <option value="Whooley" >Whooley</option>
                                                <option value="DASS">DASS</option>
                                                <option value="BAI" >BAI</option>
                                                <option value="BDI">BDI</option>
                                                <option value="MBTI" >MBTI</option>
                                            </select>
                                            <br>
                                            <label>Client :</label>
                                            <select name="client_class" class="form-control" required>
                                                <option onclick="miss1()" value="student" selected>Student</option>
                                                <option onclick="miss2()" value="staff">Staff</option>
                                            </select>
                                            <br>
                                            <div id="miss1">
                                                <label>Faculty :</label>
                                                <select name="what_faculty" class="form-control" required>
                                                    <?php foreach($faculty as $f):?>
                                                        <option value="<?php echo $f;?>"><?php echo $f;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                                <br>
                                            </div>
                                            <div id="miss2">
                                                <label>Department</label>
                                                <select name="what_department" class="form-control" required>
                                                    <?php foreach($department as $d):?>
                                                        <option value="<?php echo $d;?>"><?php echo $d;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                                <br>
                                            </div>
                                            <label>Month :</label>
                                            <select name="what_month" class="form-control" required>
                                                <option value="1" selected>January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">Jun</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <br>
                                        <button name="data_gen" class="btn btn-primary btn-block" value="gen_pdf">Generate PDF</button>
                                        <button name="data_gen" class="btn btn-primary btn-block" value="gen_excel">Generate Excel</button>
                                    </form>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="dp2" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                <div class="form-group">
                                    <form action="<?php echo base_url('index.php/')?>converter/data_psycho1" method="POST">
                                            <label>Psychometric Test :</label>
                                            <select name="what_test" class="form-control" required>
                                                <option value="GAD" selected>GAD</option>
                                                <option value="PHQ">PHQ</option>
                                                <option value="Whooley" >Whooley</option>
                                                <option value="DASS">DASS</option>
                                                <option value="BAI" >BAI</option>
                                                <option value="BDI">BDI</option>
                                                <option value="MBTI" >MBTI</option>
                                            </select>
                                            <br>
                                            <label>Client :</label>
                                            <select name="client_class" class="form-control" required>
                                                <option onclick="miss1()" value="student" selected>Student</option>
                                                <option onclick="miss2()" value="staff">Staff</option>
                                            </select>
                                            <br>
                                            <div id="miss1">
                                                <label>Faculty :</label>
                                                <select name="what_faculty" class="form-control" required>
                                                    <?php foreach($faculty as $f):?>
                                                        <option value="<?php echo $f;?>"><?php echo $f;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                                <br>
                                            </div>
                                            <div id="miss2">
                                                <label>Department</label>
                                                <select name="what_department" class="form-control" required>
                                                    <?php foreach($department as $d):?>
                                                        <option value="<?php echo $d;?>"><?php echo $d;?></option>
                                                    <?php endforeach;?>
                                                </select>
                                                <br>
                                            </div>
                                            <label>Start Date :</label>
                                            <input class="form-control" type="date" name="what_start" required>
                                            <br>
                                            <label>End Date</label>
                                            <input class="form-control" type="date" name="what_end" required>
                                            <br>
                                        <button name="data_gen" class="btn btn-primary btn-block" value="gen_pdf">Generate PDF</button>
                                        <button name="data_gen" class="btn btn-primary btn-block" value="gen_excel">Generate Excel</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>