<?php 
	defined('BASEPATH') OR exit('No direct script allowed');

	class Counselor extends CI_Controller
	{
		public function dashboard(){
			$data['title'] = 'Dashboard';
			$raw = $this->counselor_model->get_data();

			$name = $raw->staff_name;
			$noid = $raw->staff_no;
			$center = $raw->staff_department;
			$email = $raw->staff_email;
			$phone = $raw->staff_phone;

			$profile = array(
				'user_name' => $name,
				'user_no' => $noid,
				'user_place' => $center,
				'user_email' => $email,
				'user_phone' => $phone
			);
			$data['vstudent'] = $this->counselor_model->student_num();
			$data['vstaff'] = $this->counselor_model->staff_num();
			$data['list_stu'] = $this->counselor_model->get_student();
			$data['list_sta'] = $this->counselor_model->get_staff();

			$this->session->set_userdata($profile);
			$data['hakos'] = $this->counselor_model->check_mbti();
			$this->load->view('PsyTest/Counselor/dashboard',$data);
		}

		public function appointment(){
			$data['title'] = 'Appointment';
			$data['sta'] = $this->counselor_model->appt_sta();
			$data['stu'] = $this->counselor_model->appt_stu();

			$this->load->view('PsyTest/Counselor/appointment',$data);
		}

		public function accept_appt($d1,$d2,$d3){
			$data = array('appt_status'=>'ACCEPTED');
			$this->counselor_model->update_appointment($d1,$data);
			$this->session->set_userdata('accept','gura');
			
			$data = array('gad_user'=>$d2 ,'gad_session' =>$d3,'gad_status' => 'INCOMPLETE','gad_info' => 'COUNSELING');
			$this->counselor_model->insert_gad($data);
			$data = array('phq_user'=>$d2 ,'phq_session' =>$d3,'phq_status' => 'INCOMPLETE','phq_info' => 'COUNSELING');
			$this->counselor_model->insert_phq($data);
			$data = array('dass_user'=>$d2 ,'dass_session' =>$d3,'dass_status' => 'INCOMPLETE','dass_info' => 'COUNSELING');
			$this->counselor_model->insert_dass($data);
			$data = array('whooley_user'=>$d2 ,'whooley_session' =>$d3,'whooley_status' => 'INCOMPLETE','whooley_info' => 'COUNSELING');
			$this->counselor_model->insert_whooley($data);
			if($d2[0] == 'd'){
				redirect(base_url('index.php').'/counselor/d1/'.$d2);
			}else{
				redirect(base_url('index.php').'/counselor/d2/'.$d2);
			}
		}

		public function reject_appt(){
			$data = array('appt_status'=>'REJECTED');
			$this->counselor_model->update_appointment($data);
			$this->session->set_userdata('reject','gura');
			redirect('counselor/appointment');
		}

		public function d1($id){
			$data['title'] = 'Display';
			$data['pro']=$this->counselor_model->dispro1($id);
			$data['gad'] = $this->counselor_model->get_gad($id);
			$data['phq'] = $this->counselor_model->get_phq($id);
			$data['dass'] = $this->counselor_model->get_dass($id);
			$data['whooley'] = $this->counselor_model->get_whooley($id);
			$data['bai'] = $this->counselor_model->get_bai($id);
			$data['bdi'] = $this->counselor_model->get_bdi($id);
			$data['mbti'] = $this->counselor_model->get_mbti($id);
			$data['clinical'] = $this->counselor_model->get_clinical($id);
			$this->load->view('PsyTest/Counselor/d1',$data);
		}

		public function d2($id){
			$data['title'] = 'Display';
			$data['pro']=$this->counselor_model->dispro2($id);
			$data['gad'] = $this->counselor_model->get_gad($id);
			$data['phq'] = $this->counselor_model->get_phq($id);
			$data['dass'] = $this->counselor_model->get_dass($id);
			$data['whooley'] = $this->counselor_model->get_whooley($id);
			$data['bai'] = $this->counselor_model->get_bai($id);
			$data['bdi'] = $this->counselor_model->get_bdi($id);
			$data['mbti'] = $this->counselor_model->get_mbti($id);
			$data['clinical'] = $this->counselor_model->get_clinical($id);
			$this->load->view('PsyTest/Counselor/d2',$data);
		} 
		public function data(){
			$data['title'] = 'Data';
			$data['list_stu'] = $this->counselor_model->get_student();
			$data['list_sta'] = $this->counselor_model->get_staff();
			$this->load->view('PsyTest/Counselor/data',$data);
		}

		public function add_test($id){
			$a = $this->input->post('add');
			if($a == 'gad'){
				$data = array('gad_user'=> $id ,'gad_session' =>date("Y-m-d") ,'gad_status' => 'INCOMPLETE','gad_info'=> 'COUNSELING');
				$this->counselor_model->insert_gad($data);
			}elseif($a == 'phq'){
				$data = array('phq_user'=> $id ,'phq_session' =>date("Y-m-d") ,'phq_status' => 'INCOMPLETE','phq_info'=> 'COUNSELING');
				$this->counselor_model->insert_phq($data);
			}elseif($a == 'dass'){
				$data = array('dass_user'=> $id ,'dass_session' =>date("Y-m-d") ,'dass_status' => 'INCOMPLETE','dass_info'=> 'COUNSELING');
				$this->counselor_model->insert_dass($data);
			}elseif($a == 'whooley'){
				$data = array('whooley_user'=> $id ,'whooley_session' =>date("Y-m-d") ,'whooley_status' => 'INCOMPLETE','whooley_info'=> 'COUNSELING');
				$this->counselor_model->insert_whooley($data);
			}elseif($a == 'bai'){
				$data = array('bai_user'=> $id ,'bai_session' =>date("Y-m-d") ,'bai_status' => 'INCOMPLETE','bai_info'=> 'COUNSELING');
				$this->counselor_model->insert_bai($data);
			}elseif($a == 'bdi'){
				$data = array('bdi_user'=> $id ,'bdi_session' =>date("Y-m-d") ,'bdi_status' => 'INCOMPLETE','bdi_info'=> 'COUNSELING');
				$this->counselor_model->insert_bdi($data);
			}else{
				$data = array('mbti_user'=> $id ,'mbti_session' =>date("Y-m-d") ,'mbti_status' => 'INCOMPLETE','mbti_info'=> 'COUNSELING');
				$this->counselor_model->insert_mbti($data);
			}
			$this->session->set_userdata('gawr','gura');
			if($id[0] == 'd'){
				redirect('counselor/d1/'.$id);
			}else{
				redirect('counselor/d2/'.$id);
			}
		}
	}
 ?>