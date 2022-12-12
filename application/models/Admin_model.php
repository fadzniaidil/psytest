<?php 
	defined('BASEPATH') OR exit('No direct script allowed');

	class Admin_model extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function num_student(){
			$this->db->distinct();
			$this->db->select('appt_client');
			$this->db->from('appointment');
			$this->db->join('student','appointment.appt_client = student.student_id');
			$this->db->where('appt_status', 'ACCEPTED');
			return $query = $this->db->get()->num_rows();
		}

		function num_staff(){
			$this->db->distinct();
			$this->db->select('appt_client');
			$this->db->from('appointment');
			$this->db->join('staff','appointment.appt_client = staff.staff_id');
			$this->db->where('appt_status', 'ACCEPTED');
			return $query = $this->db->get()->num_rows();
		}

		function num_interviewer(){
			$this->db->distinct();
			$this->db->select('*');
			$this->db->from('test_mbti');
			$this->db->where('mbti_info','INTERVIEW');
			return $this->db->get()->num_rows();
		}

		function num_orientation(){
			$this->db->distinct();
			$this->db->select('phq_user');
			$this->db->from('test_gad');
			$this->db->join('test_phq','gad_user = phq_user');
			$this->db->join('test_whooley','gad_user = whooley_user');
			$this->db->join('test_dass','gad_user = dass_user');
			$this->db->where('gad_info','ORIENTATION');
			$this->db->where('phq_info','ORIENTATION');
			$this->db->where('whooley_info','ORIENTATION');
			$this->db->where('dass_info','ORIENTATION');
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('dass_status','COMPLETE');
			return $this->db->get()->num_rows();
		}


		function gad_student(){
			$this->db->distinct();
			$this->db->select('gad_user');
			$this->db->from('test_gad');
			$this->db->join('student','test_gad.gad_user = student.student_id');
			$this->db->where('gad_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function gad_staff(){
			$this->db->distinct();
			$this->db->select('gad_user');
			$this->db->from('test_gad');
			$this->db->join('staff','test_gad.gad_user = staff.staff_id');
			$this->db->where('gad_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function gad_orientation(){
			$this->db->distinct();
			$this->db->select('gad_user');
			$this->db->from('test_gad');
			$this->db->join('student','test_gad.gad_user = student.student_id');
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('gad_info','ORIENTATION');
			return $query = $this->db->get()->num_rows();
		}
		function gad_none(){
			$this->db->select('gad_result');
			$this->db->from('test_gad');
			$this->db->where('gad_result','NONE');
			return $query = $this->db->get()->num_rows();
		}
		function gad_mild(){
			$this->db->select('gad_result');
			$this->db->from('test_gad');
			$this->db->where('gad_result','MILD');
			return $query = $this->db->get()->num_rows();
		}
		function gad_moderate(){
			$this->db->select('gad_result');
			$this->db->from('test_gad');
			$this->db->where('gad_result','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function gad_severe(){
			$this->db->select('gad_result');
			$this->db->from('test_gad');
			$this->db->where('gad_result','SEVERE');
			return $query = $this->db->get()->num_rows();
		}

		function phq_student(){
			$this->db->distinct();
			$this->db->select('phq_user');
			$this->db->from('test_phq');
			$this->db->join('student','test_phq.phq_user = student.student_id');
			$this->db->where('phq_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function phq_orientation(){
			$this->db->distinct();
			$this->db->select('phq_user');
			$this->db->from('test_phq');
			$this->db->join('student','test_phq.phq_user = student.student_id');
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('phq_info','ORIENTATION');
			return $query = $this->db->get()->num_rows();
		}

		function phq_staff(){
			$this->db->distinct();
			$this->db->select('phq_user');
			$this->db->from('test_phq');
			$this->db->join('staff','test_phq.phq_user = staff.staff_id');
			$this->db->where('phq_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function phq_none(){
			$this->db->select('phq_result');
			$this->db->from('test_phq');
			$this->db->where('phq_result','NONE');
			return $query = $this->db->get()->num_rows();
		}
		function phq_mild(){
			$this->db->select('phq_result');
			$this->db->from('test_phq');
			$this->db->where('phq_result','MILD');
			return $query = $this->db->get()->num_rows();
		}
		function phq_moderate(){
			$this->db->select('phq_result');
			$this->db->from('test_phq');
			$this->db->where('phq_result','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function phq_modsevere(){
			$this->db->select('phq_result');
			$this->db->from('test_phq');
			$this->db->where('phq_result','MODERATE SEVERE');
			return $query = $this->db->get()->num_rows();
		}
		function phq_severe(){
			$this->db->select('phq_result');
			$this->db->from('test_phq');
			$this->db->where('phq_result','SEVERE');
			return $query = $this->db->get()->num_rows();
		}

		function whooley_student(){
			$this->db->distinct();
			$this->db->select('whooley_user');
			$this->db->from('test_whooley');
			$this->db->join('student','test_whooley.whooley_user = student.student_id');
			$this->db->where('whooley_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function whooley_orientation(){
			$this->db->distinct();
			$this->db->select('whooley_user');
			$this->db->from('test_whooley');
			$this->db->join('student','test_whooley.whooley_user = student.student_id');
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('whooley_info','ORIENTATION');
			return $query = $this->db->get()->num_rows();
		}
		function whooley_staff(){
			$this->db->distinct();
			$this->db->select('whooley_user');
			$this->db->from('test_whooley');
			$this->db->join('staff','test_whooley.whooley_user = staff.staff_id');
			$this->db->where('whooley_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function whooley_positive(){
			$this->db->select('whooley_result');
			$this->db->from('test_whooley');
			$this->db->where('whooley_result','POSITIVE');
			return $query = $this->db->get()->num_rows();
		}
		function whooley_negative(){
			$this->db->select('whooley_result');
			$this->db->from('test_whooley');
			$this->db->where('whooley_result','NEGATIVE');
			return $query = $this->db->get()->num_rows();
		}

		function dass_student(){
			$this->db->distinct();
			$this->db->select('dass_user');
			$this->db->from('test_dass');
			$this->db->join('student','test_dass.dass_user = student.student_id');
			$this->db->where('dass_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_orientation(){
			$this->db->distinct();
			$this->db->select('dass_user');
			$this->db->from('test_dass');
			$this->db->join('student','test_dass.dass_user = student.student_id');
			$this->db->where('dass_status','COMPLETE');
			$this->db->where('dass_info','ORIENTATION');
			return $query = $this->db->get()->num_rows();
		}
		function dass_staff(){
			$this->db->distinct();
			$this->db->select('dass_user');
			$this->db->from('test_dass');
			$this->db->join('staff','test_dass.dass_user = staff.staff_id');
			$this->db->where('dass_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}


		function dass_normal1(){
			$this->db->select('dass_stress');
			$this->db->from('test_dass');
			$this->db->where('dass_stress','NORMAL');
			return $query = $this->db->get()->num_rows();
		}
		function dass_mild1(){
			$this->db->select('dass_stress');
			$this->db->from('test_dass');
			$this->db->where('dass_stress','MILD');
			return $query = $this->db->get()->num_rows();
		}
		function dass_moderate1(){
			$this->db->select('dass_stress');
			$this->db->from('test_dass');
			$this->db->where('dass_stress','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_severe1(){
			$this->db->select('dass_stress');
			$this->db->from('test_dass');
			$this->db->where('dass_stress','SEVERE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_exsevere1(){
			$this->db->select('dass_stress');
			$this->db->from('test_dass');
			$this->db->where('dass_stress','EXTREMELY SEVERE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_normal2(){
			$this->db->select('dass_anxiety');
			$this->db->from('test_dass');
			$this->db->where('dass_anxiety','NORMAL');
			return $query = $this->db->get()->num_rows();
		}
		function dass_mild2(){
			$this->db->select('dass_anxiety');
			$this->db->from('test_dass');
			$this->db->where('dass_anxiety','MILD');
			return $query = $this->db->get()->num_rows();
		}
		function dass_moderate2(){
			$this->db->select('dass_anxiety');
			$this->db->from('test_dass');
			$this->db->where('dass_anxiety','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_severe2(){
			$this->db->select('dass_anxiety');
			$this->db->from('test_dass');
			$this->db->where('dass_anxiety','SEVERE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_exsevere2(){
			$this->db->select('dass_anxiety');
			$this->db->from('test_dass');
			$this->db->where('dass_anxiety','EXTREMELY SEVERE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_normal3(){
			$this->db->select('dass_depression');
			$this->db->from('test_dass');
			$this->db->where('dass_depression','NORMAL');
			return $query = $this->db->get()->num_rows();
		}
		function dass_mild3(){
			$this->db->select('dass_depression');
			$this->db->from('test_dass');
			$this->db->where('dass_depression','MILD');
			return $query = $this->db->get()->num_rows();
		}
		function dass_moderate3(){
			$this->db->select('dass_depression');
			$this->db->from('test_dass');
			$this->db->where('dass_depression','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_severe3(){
			$this->db->select('dass_depression');
			$this->db->from('test_dass');
			$this->db->where('dass_depression','SEVERE');
			return $query = $this->db->get()->num_rows();
		}
		function dass_exsevere3(){
			$this->db->select('dass_depression');
			$this->db->from('test_dass');
			$this->db->where('dass_depression','EXTREMELY SEVERE');
			return $query = $this->db->get()->num_rows();
		}




		function bdi_student(){
			$this->db->distinct();
			$this->db->select('bdi_user');
			$this->db->from('test_bdi');
			$this->db->join('student','test_bdi.bdi_user = student.student_id');
			$this->db->where('bdi_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function bdi_staff(){
			$this->db->distinct();
			$this->db->select('bdi_user');
			$this->db->from('test_bdi');
			$this->db->join('staff','test_bdi.bdi_user = staff.staff_id');
			$this->db->where('bdi_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function bdi_minimal(){
			$this->db->select('bdi_result');
			$this->db->from('test_bdi');
			$this->db->where('bdi_result','MINIMAL');
			return $query = $this->db->get()->num_rows();
		}
		function bdi_mild(){
			$this->db->select('bdi_result');
			$this->db->from('test_bdi');
			$this->db->where('bdi_result','MILD');
			return $query = $this->db->get()->num_rows();
		}
		function bdi_moderate(){
			$this->db->select('bdi_result');
			$this->db->from('test_bdi');
			$this->db->where('bdi_result','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function bdi_severe(){
			$this->db->select('bdi_result');
			$this->db->from('test_bdi');
			$this->db->where('bdi_result','SEVERE');
			return $query = $this->db->get()->num_rows();
		}

		function bai_student(){
			$this->db->distinct();
			$this->db->select('bai_user');
			$this->db->from('test_bai');
			$this->db->join('student','test_bai.bai_user = student.student_id');
			$this->db->where('bai_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function bai_staff(){
			$this->db->distinct();
			$this->db->select('bai_user');
			$this->db->from('test_bai');
			$this->db->join('staff','test_bai.bai_user = staff.staff_id');
			$this->db->where('bai_status','COMPLETE');
			return $query = $this->db->get()->num_rows();
		}
		function bai_low(){
			$this->db->select('bai_result');
			$this->db->from('test_bai');
			$this->db->where('bai_result','LOW');
			return $query = $this->db->get()->num_rows();
		}
		function bai_moderate(){
			$this->db->select('bai_result');
			$this->db->from('test_bai');
			$this->db->where('bai_result','MODERATE');
			return $query = $this->db->get()->num_rows();
		}
		function bai_severe(){
			$this->db->select('bai_result');
			$this->db->from('test_bai');
			$this->db->where('bai_result','SEVERE');
			return $query = $this->db->get()->num_rows();
		}


		function get_otr(){
			$this->db->select('login_user,login_role');
			$this->db->from('login');
			$this->db->where('login_role','CLIENT');
			return $query = $this->db->get()->result();
		}

		function otr_student($id){
			$this->db->select('student_no,student_name');
			$this->db->from('student');
			$this->db->where('student_id', $id);
			return $query = $this->db->get()->result();
		}
		function otr_staff($id){
			$this->db->select('staff_no,staff_name');
			$this->db->from('staff');
			$this->db->where('staff_id', $id);
			return $query = $this->db->get()->result();
		}
		function otr_gad($id){
			$this->db->select('gad_id');
			$this->db->from('test_gad');
			$this->db->where('gad_user',$id);
			$this->db->where('gad_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}
		function otr_phq($id){
			$this->db->select('phq_id');
			$this->db->from('test_phq');
			$this->db->where('phq_user',$id);
			$this->db->where('phq_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}
		function otr_who($id){
			$this->db->select('whooley_id');
			$this->db->from('test_whooley');
			$this->db->where('whooley_user',$id);
			$this->db->where('whooley_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}
		function otr_dass($id){
			$this->db->select('dass_id');
			$this->db->from('test_dass');
			$this->db->where('dass_user',$id);
			$this->db->where('dass_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}
		function otr_bdi($id){
			$this->db->select('bdi_id');
			$this->db->from('test_bdi');
			$this->db->where('bdi_user',$id);
			$this->db->where('bdi_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}
		function otr_bai($id){
			$this->db->select('bai_id');
			$this->db->from('test_bai');
			$this->db->where('bai_user',$id);
			$this->db->where('bai_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}
		function otr_mbti($id){
			$this->db->select('mbti_id');
			$this->db->from('test_mbti');
			$this->db->where('mbti_user',$id);
			$this->db->where('mbti_status','COMPLETE');
			return $query= $this->db->get()->num_rows();
		}

		function gad_otr0v1($id,$op){
			$this->db->select('gad_id,student_name,student_no,student_email,student_phone,gad_date,gad_score,gad_result,gad_status');
			$this->db->from('student');
			$this->db->join('test_gad','student.student_id  = test_gad.gad_user');
			$this->db->where('student_id',$id);
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('gad_result',$op);
			return $query = $this->db->get()->result();
		}
		function gad_otr0v2($id,$op){
			$this->db->select('gad_id,staff_name,staff_no,staff_email,staff_phone,gad_date,gad_score,gad_result,gad_status');
			$this->db->from('staff');
			$this->db->join('test_gad','staff.staff_id  = test_gad.gad_user');
			$this->db->where('staff_id',$id);
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('gad_result',$op);
			return $query = $this->db->get()->result();
		}

		function phq_otr0v1($id,$op){
			$this->db->select('phq_id,student_name,student_no,student_email,student_phone,phq_date,phq_score,phq_result,phq_status');
			$this->db->from('student');
			$this->db->join('test_phq','student.student_id  = test_phq.phq_user');
			$this->db->where('student_id',$id);
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('phq_result',$op);
			return $query = $this->db->get()->result();
		}
		function phq_otr0v2($id,$op){
			$this->db->select('phq_id,staff_name,staff_no,staff_email,staff_phone,phq_date,phq_score,phq_result,phq_status');
			$this->db->from('staff');
			$this->db->join('test_phq','staff.staff_id  = test_phq.phq_user');
			$this->db->where('staff_id',$id);
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('phq_result',$op);
			return $query = $this->db->get()->result();
		}

		function who_otr0v1($id,$op){
			$this->db->select('whooley_id,student_name,student_no,student_email,student_phone,whooley_date,whooley_score,whooley_result,whooley_status');
			$this->db->from('student');
			$this->db->join('test_whooley','student.student_id  = test_whooley.whooley_user');
			$this->db->where('student_id',$id);
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('whooley_result',$op);
			return $query = $this->db->get()->result();
		}
		function who_otr0v2($id,$op){
			$this->db->select('whooley_id,staff_name,staff_no,staff_email,staff_phone,whooley_date,whooley_score,whooley_result,whooley_status');
			$this->db->from('staff');
			$this->db->join('test_whooley','staff.staff_id  = test_whooley.whooley_user');
			$this->db->where('staff_id',$id);
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('whooley_result',$op);
			return $query = $this->db->get()->result();
		}

		function bdi_otr0v1($id,$op){
			$this->db->select('bdi_id,student_name,student_no,student_email,student_phone,bdi_date,bdi_score,bdi_result,bdi_status');
			$this->db->from('student');
			$this->db->join('test_bdi','student.student_id  = test_bdi.bdi_user');
			$this->db->where('student_id',$id);
			$this->db->where('bdi_status','COMPLETE');
			$this->db->where('bdi_result',$op);
			return $query = $this->db->get()->result();
		}
		function bdi_otr0v2($id,$op){
			$this->db->select('bdi_id,staff_name,staff_no,staff_email,staff_phone,bdi_date,bdi_score,bdi_result,bdi_status');
			$this->db->from('staff');
			$this->db->join('test_bdi','staff.staff_id  = test_bdi.bdi_user');
			$this->db->where('staff_id',$id);
			$this->db->where('bdi_status','COMPLETE');
			$this->db->where('bdi_result',$op);
			return $query = $this->db->get()->result();
		}

		function dass_otr0v1($id){
			$this->db->select('dass_id,student_name,student_no,student_email,student_phone,dass_date,dass_stress,dass_anxiety,dass_depression,dass_status');
			$this->db->from('student');
			$this->db->join('test_dass','student.student_id  = test_dass.dass_user');
			$this->db->where('student_id',$id);
			$this->db->where('dass_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function dass_otr0v2($id){
			$this->db->select('dass_id,staff_name,staff_no,staff_email,staff_phone,dass_date,dass_stress,dass_anxiety,dass_depression,dass_status');
			$this->db->from('staff');
			$this->db->join('test_dass','staff.staff_id  = test_dass.dass_user');
			$this->db->where('staff_id',$id);
			$this->db->where('dass_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function bai_otr0v1($id,$op){
			$this->db->select('bai_id,student_name,student_no,student_email,student_phone,bai_date,bai_score,bai_result,bai_status');
			$this->db->from('student');
			$this->db->join('test_bai','student.student_id  = test_bai.bai_user');
			$this->db->where('student_id',$id);
			$this->db->where('bai_status','COMPLETE');
			$this->db->where('bai_result',$op);
			return $query = $this->db->get()->result();
		}
		function bai_otr0v2($id,$op){
			$this->db->select('bai_id,staff_name,staff_no,staff_email,staff_phone,bai_date,bai_score,bai_result,bai_status');
			$this->db->from('staff');
			$this->db->join('test_bai','staff.staff_id  = test_bai.bai_user');
			$this->db->where('staff_id',$id);
			$this->db->where('bai_status','COMPLETE');
			$this->db->where('bai_result',$op);
			return $query = $this->db->get()->result();
		}

		function mbti_otr0v1($id){
			$this->db->select('mbti_id,student_name,student_no,student_email,student_phone,mbti_date,mbti_result,mbti_status');
			$this->db->from('student');
			$this->db->join('test_mbti','student.student_id  = test_mbti.mbti_user');
			$this->db->where('student_id',$id);
			$this->db->where('mbti_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function mbti_otr0v2($id){
			$this->db->select('mbti_id,staff_name,staff_no,staff_email,staff_phone,mbti_date,mbti_result,mbti_status');
			$this->db->from('staff');
			$this->db->join('test_mbti','staff.staff_id  = test_mbti.mbti_user');
			$this->db->where('staff_id',$id);
			$this->db->where('mbti_status','COMPLETE');
			return $query = $this->db->get()->result();
		}



		function get_counselor(){
			$this->db->select('staff_name,staff_id');
			$this->db->from('login');
			$this->db->join('staff','login.login_user = staff.staff_id');
			$this->db->where('login_role','COUNSELOR');
			return $this->db->get()->result();
		}

		function get_temp(){
			$this->db->select('staff_name,staff_id');
			$this->db->from('login');
			$this->db->join('staff','login.login_user = staff.staff_id');
			$this->db->where('login_role','TEMP');
			return $this->db->get()->result();
		}
		function get_temp2(){
			$this->db->select('staff_name,staff_id');
			$this->db->from('login');
			$this->db->join('staff','login.login_user = staff.staff_id');
			$this->db->where('login_role','TEMP2');
			return $this->db->get()->result();
		}

		function get_client($data){
			$this->db->distinct();
			$this->db->select('appt_client');
			$this->db->from('appointment');
			$this->db->where('appt_counselor',$data);
			return $this->db->get()->result();
		}

		function get_stu($data){
			$this->db->select('student_id,student_no,student_name,student_faculty,student_phone');
			$this->db->from('student');
			$this->db->where('student_id',$data);
			return $this->db->get()->result();
		}

		function get_sta($data){
			$this->db->select('staff_id,staff_no,staff_name,staff_department,staff_phone');
			$this->db->from('staff');
			$this->db->where('staff_id',$data);
			return $this->db->get()->result();
		}

		function exchange_temp($id){
			$ex = array('login_role' => 'TEMP');
			$this->db->where('login_user', $id);
			$this->db->update('login',$ex);
		}

		function exchange_temp2($id){
			$ex = array('login_role' => 'TEMP2');
			$this->db->where('login_user', $id);
			$this->db->update('login',$ex);
		}

		function exchange_revert($id){
			$ex = array('login_role' => 'COUNSELOR');
			$this->db->where('login_user', $id);
			$this->db->update('login',$ex);
		}

		function exchange_revert2($id){
			$ex = array('login_role' => 'CLIENT');
			$this->db->where('login_user', $id);
			$this->db->update('login',$ex);
		}

		function search_data(){
			$this->db->select('*');
			$this->db->from('staff');
			$this->db->join('login','login_user=staff_id');
			$this->db->where('login_role','CLIENT');
			$this->db->order_by('staff_id','DESC');
			return $this->db->get()->result();
		}

		function interviewer_data(){
			$this->db->select('*');
			$this->db->from('staff');
			$this->db->join('login','login_user=staff_id');
			$this->db->where_not_in('login_role','ADMIN');
			$this->db->order_by('staff_id','DESC');
			return $this->db->get()->result();
		}

		function interview_result(){
			$this->db->select('*');
			$this->db->from('test_mbti');
			$this->db->join('staff','staff_id=mbti_user');
			$this->db->where('mbti_info','INTERVIEW');
			return $this->db->get()->result();
		}

		function orio_fetch(){
			$this->db->distinct();
			$this->db->select('student_id');
			$this->db->from('student');
			$this->db->like('student_no',date('Y'));
			return $this->db->get()->result();
		}

		function orio_phq($id){
			$this->db->select('phq_info');
			$this->db->from('test_phq');
			$this->db->where('phq_info','ORIENTATION');
			$this->db->where('phq_user',$id);
			return $this->db->get()->num_rows();
		}

		function orio_gad($id){
			$this->db->select('gad_info');
			$this->db->from('test_gad');
			$this->db->where('gad_info','ORIENTATION');
			$this->db->where('gad_user',$id);
			return $this->db->get()->num_rows();
		}

		function orio_whooley($id){
			$this->db->select('whooley_info');
			$this->db->from('test_whooley');
			$this->db->where('whooley_info','ORIENTATION');
			$this->db->where('whooley_user',$id);
			return $this->db->get()->num_rows();
		}

		function orio_dass($id){
			$this->db->select('dass_info');
			$this->db->from('test_dass');
			$this->db->where('dass_info','ORIENTATION');
			$this->db->where('dass_user',$id);
			return $this->db->get()->num_rows();
		}

		function orio1(){
			$this->db->select('*');
			$this->db->from('test_gad');
			$this->db->join('student','student_id = gad_user');
			$this->db->where('gad_info','ORIENTATION');
			return $this->db->get()->result();
		}

		function orio2(){
			$this->db->select('*');
			$this->db->from('test_phq');
			$this->db->join('student','student_id = phq_user');
			$this->db->where('phq_info','ORIENTATION');
			return $this->db->get()->result();
		}


		function orio3(){
			$this->db->select('*');
			$this->db->from('test_whooley');
			$this->db->join('student','student_id = whooley_user');
			$this->db->where('whooley_info','ORIENTATION');
			return $this->db->get()->result();
		}

		function orio4(){
			$this->db->select('*');
			$this->db->from('test_dass');
			$this->db->join('student','student_id = dass_user');
			$this->db->where('dass_info','ORIENTATION');
			return $this->db->get()->result();
		}

	}
