  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#00635b;">
    <!-- Brand Logo -->
    <a href="<?php base_url(); ?>dashboard" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/custom/img/logo1.png" alt="PsyTest" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark"><strong><b>Psy</b>Test</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/custom/img/k0004.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><strong>Admin</strong></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
            <a href="<?php base_url(); ?>dashboard" class="nav-link ">
              <p><strong>
                Dashboard
              </strong></p>
            </a>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link ">
              <p><strong>
                List Test</strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php base_url(); ?>gad7" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>GAD-7</strong></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php base_url(); ?>phq9" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>PHQ9</strong></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php base_url(); ?>whooley" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>WHOOLEY</strong></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php base_url(); ?>dass" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>DASS</strong></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php base_url(); ?>bdi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>BDI</strong></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php base_url(); ?>bai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>BAI</strong></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php base_url(); ?>mbti" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><strong>MBTI</strong></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="<?php base_url(); ?>otr" class="nav-link ">
              <p><strong>
                Overall Answered Assessment
              </strong></p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?php base_url(); ?>vc" class="nav-link ">
              <p><strong>
                List Counselor
              </strong></p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?php base_url(); ?>dm" class="nav-link ">
              <p><strong>
                Data Management
              </strong></p>
            </a>
          </li>
          <?php if($this->login_model->check_roles($this->session->userdata('user_id'))->login_role == 'ADMIN'): ?>
           <li class="nav-item ">
            <a href="<?php base_url(); ?>interviewer" class="nav-link ">
              <p><strong>
                Interviewer
              </strong></p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?php base_url(); ?>orientation" class="nav-link ">
              <p><strong>
                Orientation
              </strong></p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?php base_url(); ?>sudo" class="nav-link ">
              <p><strong>
                Sudo
              </strong></p>
            </a>
          </li>
        <?php endif;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->


  </aside>




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->