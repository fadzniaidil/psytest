<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	class Counselor_model extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function get_data(){
			$this->db->select('staff_name,staff_no,staff_department,staff_email,staff_phone');
			$this->db->from('staff');
			$this->db->where('staff_id',$this->session->userdata('user_id'));
			return $query = $this->db->get()->row();
		}

		function student_num(){
			$this->db->distinct();
			$this->db->select('appt_client');
			$this->db->from('appointment');
			$this->db->join('student','appointment.appt_client = student.student_id');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status', 'ACCEPTED');
			return $query = $this->db->get()->num_rows();
		}

		function staff_num(){
			$this->db->distinct();
			$this->db->select('appt_client');
			$this->db->from('appointment');
			$this->db->join('staff','appointment.appt_client = staff.staff_id');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status', 'ACCEPTED');
			return $query = $this->db->get()->num_rows();
		}

		function get_student(){
			$this->db->distinct();
			$this->db->select('student_id,student_no, student_name, student_faculty, student_email, student_phone');
			$this->db->from('appointment');
			$this->db->join('student','appointment.appt_client = student.student_id');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status', 'ACCEPTED');
			return $query = $this->db->get()->result();
		}

		function get_staff(){
			$this->db->distinct();
			$this->db->select('staff_id,staff_no, staff_name, staff_department, staff_email, staff_phone');
			$this->db->from('appointment');
			$this->db->join('staff','appointment.appt_client = staff.staff_id');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status', 'ACCEPTED');
			return $query = $this->db->get()->result();
		}

		function appt_stu(){
			$this->db->select('appt_id,appt_client,student_name,appt_session,appt_service,appt_prob,appt_date,appt_time');
			$this->db->from('appointment');
			$this->db->join('student','appointment.appt_client = student.student_id');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status','REQUESTED');
			return $query = $this->db->get()->result();
		}

		function appt_sta(){
			$this->db->select('appt_id,appt_client,staff_name,appt_session,appt_service,appt_prob,appt_date,appt_time');
			$this->db->from('appointment');
			$this->db->join('staff','appointment.appt_client = staff.staff_id');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status','REQUESTED');
			return $query = $this->db->get()->result();
		}

		function prob_sort($data){
			$sdata = array();
			for ($i = 0; $i < strlen($data); $i++){
				if($data[$i] == 'a'){
					array_push($sdata, 'Academic');
				}
				if($data[$i] == 'b'){
					array_push($sdata, 'Career');
				}
				if($data[$i] == 'c'){
					array_push($sdata, 'Psychosocial');
				}
				if($data[$i] == 'd'){
					array_push($sdata, 'Financial');
				}
				if($data[$i] == 'e'){
					array_push($sdata, 'Family');
				}
			}
			return $sdata;
		}

		function update_appointment($d1,$data){
			$this->db->set($data);
			$this->db->where('appt_id',$d1);
			return $this->db->update('appointment',$data);
		}

		function dispro1($id){
			$query = $this->db->get_where('student',array('student_id' => $id));
			return $query->row_array();
		}
		function dispro2($id){
			$query = $this->db->get_where('staff',array('staff_id' => $id));
			return $query->row_array();
		}

		function get_gad($id){
			$query = $this->db->get_where('test_gad',array('gad_user' => $id));
			return $query->result();
		}
		function get_phq($id){
			$query = $this->db->get_where('test_phq',array('phq_user' => $id));
			return $query->result();
		}
		function get_whooley($id){
			$query = $this->db->get_where('test_whooley',array('whooley_user' => $id));
			return $query->result();
		}
		function get_dass($id){
			$query = $this->db->get_where('test_dass',array('dass_user' => $id));
			return $query->result();
		}
		function get_bai($id){
			$query = $this->db->get_where('test_bai',array('bai_user' => $id));
			return $query->result();
		}
		function get_bdi($id){
			$query = $this->db->get_where('test_bdi',array('bdi_user' => $id));
			return $query->result();
		}
		function get_mbti($id){
			$query = $this->db->get_where('test_mbti',array('mbti_user' => $id));
			return $query->result();
		}

		function insert_gad($data){
			return $this->db->insert('test_gad',$data);
		}
		function insert_phq($data){
			return $this->db->insert('test_phq',$data);
		}
		function insert_whooley($data){
			return $this->db->insert('test_whooley',$data);
		}
		function insert_bai($data){
			return $this->db->insert('test_bai',$data);
		}
		function insert_bdi($data){
			return $this->db->insert('test_bdi',$data);
		}
		function insert_mbti($data){
			return $this->db->insert('test_mbti',$data);
		}
		function insert_dass($data){
			return $this->db->insert('test_dass',$data);
		}

		function get_clinical($id){
			$this->db->select('gad_session,gad_score,gad_result,phq_score,phq_result,whooley_result,whooley_score,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
			$this->db->from('test_gad');
			$this->db->join('test_phq','test_phq.phq_session = test_gad.gad_session');
			$this->db->join('test_whooley','test_whooley.whooley_session = test_phq.phq_session');
			$this->db->join('test_dass','test_dass.dass_session = test_whooley.whooley_session');
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('dass_status','COMPLETE');
			$this->db->where('gad_user',$id);
			$this->db->where('phq_user',$id);
			$this->db->where('whooley_user',$id);
			$this->db->where('dass_user',$id);
			return $this->db->get()->result();
		}

		function check_mbti(){
			$this->db->select('*');
			$this->db->from('test_mbti');
			$this->db->where('mbti_status','INCOMPLETE');
			$this->db->where('mbti_info','INTERVIEW');
			$this->db->where('mbti_user',$this->session->userdata('user_id'));
			return $query = $this->db->get();
		}

		function no_appt(){
			$this->db->select('*');
			$this->db->from('appointment');
			$this->db->where('appt_counselor',$this->session->userdata('user_id'));
			$this->db->where('appt_status','REQUESTED');
			return $query = $this->db->get();
		}
	}
?>