<?php 
	defined('BASEPATH') OR exit('No direct script allowed');

	class Client extends CI_Controller
	{
		public function index()
		{
			$this->load->view('PsyTest/Client/client');
		}
		public function dashboard(){

			$data['title'] = 'Dashboard';
			$raw = $this->client_model->get_data();
			$num = $this->client_model->num_test();
			$data['list_gd'] = $this->client_model->gad_detail();
			$data['list_pq'] = $this->client_model->phq_detail();
			$data['list_wh'] = $this->client_model->whooley_detail();
			$data['list_ds'] = $this->client_model->dass_detail();
			$data['list_ba'] = $this->client_model->bai_detail();
			$data['list_bd'] = $this->client_model->bdi_detail();
			$data['list_mb'] = $this->client_model->mbti_detail();

			if($this->session->userdata('user_id')[0]=='d'){
				$name = $raw->student_name;
				$noid = $raw->student_no;
				$center = $raw->student_faculty;
				$email = $raw->student_email;
				$phone = $raw->student_phone;
			}else{
				$name = $raw->staff_name;
				$noid = $raw->staff_no;
				$center = $raw->staff_department;
				$email = $raw->staff_email;
				$phone = $raw->staff_phone;
			}
			
			$profile = array(
				'user_name' => $name,
				'user_no' => $noid,
				'user_place' => $center,
				'user_email' => $email,
				'user_phone' => $phone
			);

			$this->session->set_userdata($profile);

			if ($num==0){
				$data['app'] = 0;
			}else{
				$data['app'] = 1;
			}

			$this->load->view('PsyTest/Client/dashboard',$data);
		}
		public function appointment(){
			$data['title'] = 'Appointment';
			$data['counselor'] = $this->client_model->get_counselor();
			$num = $this->client_model->num_test();
			if ($num==0){
				$data['app'] = 0;
			}else{
				$data['app'] = 1;
			}
			$this->load->view('PsyTest/Client/appointment',$data);
		}
		public function assessment(){
			$data['title'] = 'Assessment';

			$num = $this->client_model->num_test();
			$data['list_gd'] = $this->client_model->gad_detail();
			$data['list_pq'] = $this->client_model->phq_detail();
			$data['list_wh'] = $this->client_model->whooley_detail();
			$data['list_ds'] = $this->client_model->dass_detail();
			$data['list_ba'] = $this->client_model->bai_detail();
			$data['list_bd'] = $this->client_model->bdi_detail();
			$data['list_mb'] = $this->client_model->mbti_detail();

			if ($num==0){
				$data['app'] = 0;
			}else{
				$data['app'] = 1;
			}

			$this->load->view('PsyTest/Client/assessment',$data);
		}
		public function history(){
			$data['title'] = 'Appointment History';
			$data['history'] = $this->client_model->appt_history();
			$num = $this->client_model->num_test();
			if ($num==0){
				$data['app'] = 0;
			}else{
				$data['app'] = 1;
			}
			$this->load->view('PsyTest/Client/history',$data);
		}

		public function make_appt(){
			$a = $this->session->userdata('user_id');
			$b = $this->input->post('session_type');
			$c = $this->input->post('service_type');
			$d1 = $this->input->post('pt1');
			$d2 = $this->input->post('pt2');
			$d3 = $this->input->post('pt3');
			$d4 = $this->input->post('pt4');
			$d5 = $this->input->post('pt5');
			$d = $d1.$d2.$d3.$d4.$d5;
			$e = $this->input->post('counselor');
			$f = $this->input->post('appt_date');
			$g = $this->input->post('appt_time');
			$h = 'REQUESTED';

			$data = array(
				'appt_client' => $a,
				'appt_session' => $b,
				'appt_service' => $c,
				'appt_prob' => $d,
				'appt_counselor' => $e,
				'appt_date' => $f,
				'appt_time' => $g,
				'appt_status' => $h
			);

			$this->client_model->insert_appt($data);
			$this->session->set_userdata('gawr','gura');
			redirect('client/appointment');
		}
	}
 ?>