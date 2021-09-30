<?php 
	defined('BASEPATH') OR exit('No direct script allowed');

	class Client_model extends CI_Model{

		function __construct() 
		{
	        parent::__construct();
	    }

		function get_data(){
			
			if ($this->session->userdata('user_id')[0] == 'd'){
				$this->db->select('student_name,student_no,student_faculty,student_email,student_phone');
				$this->db->from('student');
				$this->db->where('student_id',$this->session->userdata('user_id'));
				return $query = $this->db->get()->row();

			}else{
				$this->db->select('staff_name,staff_no,staff_department,staff_email,staff_phone');
				$this->db->from('staff');
				$this->db->where('staff_id',$this->session->userdata('user_id'));
				return $query = $this->db->get()->row();
			}
		}

		function num_test(){

			$t1= $this->check_gad();
			$t2= $this->check_phq();
			$t3= $this->check_whooley();
			$t4= $this->check_dass();
			$t5= $this->check_bai();
			$t6= $this->check_bdi();
			$t7= $this->check_mbti();

			$total_test=$t1+$t2+$t3+$t4+$t5+$t6+$t7;
			return $total_test;
		}

		function check_gad(){
			$this->db->select('gad_status');
			$this->db->from('test_gad');
			$this->db->where('gad_status','INCOMPLETE');
			$this->db->where('gad_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function check_phq(){
			$this->db->select('phq_status');
			$this->db->from('test_phq');
			$this->db->where('phq_status','INCOMPLETE');
			$this->db->where('phq_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function check_mbti(){
			$this->db->select('mbti_status');
			$this->db->from('test_mbti');
			$this->db->where('mbti_status','INCOMPLETE');
			$this->db->where('mbti_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function check_whooley(){
			$this->db->select('whooley_status');
			$this->db->from('test_whooley');
			$this->db->where('whooley_status','INCOMPLETE');
			$this->db->where('whooley_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function check_dass(){
			$this->db->select('dass_status');
			$this->db->from('test_dass');
			$this->db->where('dass_status','INCOMPLETE');
			$this->db->where('dass_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function check_bai(){
			$this->db->select('bai_status');
			$this->db->from('test_bai');
			$this->db->where('bai_status','INCOMPLETE');
			$this->db->where('bai_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function check_bdi(){
			$this->db->select('bdi_status');
			$this->db->from('test_bdi');
			$this->db->where('bdi_status','INCOMPLETE');
			$this->db->where('bdi_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->num_rows();
		}

		function gad_detail(){
			$this->db->select('gad_id','gad_status');
			$this->db->from('test_gad');
			$this->db->where('gad_status','INCOMPLETE');
			$this->db->where('gad_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		function phq_detail(){
			$this->db->select('phq_id','phq_status');
			$this->db->from('test_phq');
			$this->db->where('phq_status','INCOMPLETE');
			$this->db->where('phq_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		function whooley_detail(){
			$this->db->select('whooley_id','whooley_status');
			$this->db->from('test_whooley');
			$this->db->where('whooley_status','INCOMPLETE');
			$this->db->where('whooley_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		function dass_detail(){
			$this->db->select('dass_id','dass_status');
			$this->db->from('test_dass');
			$this->db->where('dass_status','INCOMPLETE');
			$this->db->where('dass_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		function mbti_detail(){
			$this->db->select('mbti_id','mbti_status');
			$this->db->from('test_mbti');
			$this->db->where('mbti_status','INCOMPLETE');
			$this->db->where('mbti_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		function bai_detail(){
			$this->db->select('bai_id','bai_status');
			$this->db->from('test_bai');
			$this->db->where('bai_status','INCOMPLETE');
			$this->db->where('bai_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		function bdi_detail(){
			$this->db->select('bdi_id','bdi_status');
			$this->db->from('test_bdi');
			$this->db->where('bdi_status','INCOMPLETE');
			$this->db->where('bdi_user',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
		
		function get_counselor(){
			$this->db->select('login_user,staff_name');
			$this->db->from('login');
			$this->db->join('staff','login.login_user = staff.staff_id');
			$this->db->where('login_role','COUNSELOR');
			return $query = $this->db->get()->result();
		}

		function insert_appt($data){
			return $this->db->insert('appointment',$data);
		}

		function appt_history(){
			$this->db->select('appt_date, appt_time, appt_session,appt_service ,staff_name,appt_status');
			$this->db->from('appointment');
			$this->db->join('staff','appointment.appt_counselor = staff.staff_id');
			$this->db->where('appt_client',$this->session->userdata('user_id'));
			return $query = $this->db->get()->result();
		}
	}
?>