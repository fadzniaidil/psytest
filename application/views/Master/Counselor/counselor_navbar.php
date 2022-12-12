<nav class="main-header navbar navbar-expand-md navbar-dark navbar-white" style="background-color:#7365c7;">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="<?php echo base_url();?>assets/custom/img/logo1.png" alt="PsyTest" class="brand-image image-circle">
            <span class="brand-text font-weight-light"><strong><b>Psy</b>Test</strong></span>
        </a>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/'); ?>counselor/dashboard"><strong>Home</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/'); ?>counselor/appointment"><strong>Appointment</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/'); ?>counselor/data"><strong>Client Info</strong></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge"><?php echo $this->counselor_model->no_appt()->num_rows()+$this->counselor_model->check_mbti()->num_rows(); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header"><?php echo $this->counselor_model->no_appt()->num_rows()+$this->counselor_model->check_mbti()->num_rows(); ?> Notifications</span>
                  <div class="dropdown-divider"></div>
                  <?php if($this->counselor_model->no_appt()->num_rows() > 0): ?>
                  <a href="<?php echo base_url('index.php/')?>counselor/appointment" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i><?php echo $this->counselor_model->no_appt()->num_rows();?> appointment requests
                  </a>
                <?php endif;?>
                  <?php if($this->counselor_model->check_mbti()->num_rows() > 0):?>
                  <?php foreach($this->counselor_model->check_mbti()->result() as $h):?>
                  <div class="dropdown-divider"></div>
                  <a href="<?php echo base_url('index.php/')?>test/mbti/<?php echo $h->mbti_id?>" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> Interview Test
                  </a>
                </div>
                <?php endforeach;?>
                <?php endif;?>
              </li>
        </ul>
    </div>  
</nav>