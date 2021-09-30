<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('PsyTest/Login/login');
	}
	public function login_process()
		{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			if ($user == 'admin' && $pass == 'admin'){
				$this->session->set_userdata(array('user'=>$user));
				redirect('PsyTest/Admin/admin');
			}
			else{
				$data['error'] = 'Your account is invalid';
				$this->load->view('PsyTest/Login/login',$data);
			}
		}
}
