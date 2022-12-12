<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Master/Login/login_header'); ?>
		<title>Login</title>
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <div class="login-logo" id="loginpage">
  	<img class="profile-user-img img-fluid img-circle" src="<?php echo base_url()?>assets/custom/img/logo1.png" alt="Logo PK"><br>
    <a style="color: whitesmoke;"><b><span><strong>Psy</strong></span>Test</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log in to start your session</p>

      <form action="<?php echo base_url('index.php/'); ?>login/login_process" method="post">
        <div class="input-group mb-3">
          <input type="username" id="username" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger text-center">
        <?php echo isset($error) ? $error: ''; ?>
      </span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
</body>
</html>