<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	class Login extends CI_Controller
	{

		public function index(){
			$this->load->view('PsyTest/Login/login');
		}
		public function login_process()
		{
			$user = $this->input->post('username');
			$pass = sha1($this->input->post('password'));

			$checkuser = $this->login_model->check_user($user,$pass);
			$checkrole = $this->login_model->check_roles($user);

			if ($checkuser>0){
				$role = $checkrole->login_role;
				$this->session->set_userdata('user_role',$role);
				$this->session->set_userdata('user_id',$user);
				if($role == 'admin'){
					redirect('admin/dashboard');
				}
				elseif ($role == 'COUNSELOR'){
					redirect('counselor/dashboard');
				}elseif ($role == 'CLIENT'){
					redirect('client/dashboard');
				}else{
					redirect('admin/dashboard');
				}
			}
			else{
				$data['error'] = 'Your account is invalid';
				$this->load->view('PsyTest/Login/login',$data);
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
 ?>