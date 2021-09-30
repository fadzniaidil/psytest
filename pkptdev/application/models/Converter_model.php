<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Converter_model extends CI_Model{

		function get_gadv1(){
			$this->db->select('student_name,student_no,student_email,student_phone,gad_date,gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
			$this->db->from('student');
			$this->db->join('test_gad','student.student_id  = test_gad.gad_user');
			$this->db->where('gad_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_gadv2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,gad_date,gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
			$this->db->from('staff');
			$this->db->join('test_gad','staff.staff_id  = test_gad.gad_user');
			$this->db->where('gad_status','COMPLETE');
			return $query = $this->db->get()->result();
		}

		function get_phqv1(){
			$this->db->select('student_name,student_no,student_email,student_phone,phq_date,phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
			$this->db->from('student');
			$this->db->join('test_phq','student.student_id  = test_phq.phq_user');
			$this->db->where('phq_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_phqv2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,phq_date,phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
			$this->db->from('staff');
			$this->db->join('test_phq','staff.staff_id  = test_phq.phq_user');
			$this->db->where('phq_status','COMPLETE');
			return $query = $this->db->get()->result();
		}

		function get_whov1(){
			$this->db->select('student_name,student_no,student_email,student_phone,whooley_date,whooley_q1,whooley_q2,whooley_score,whooley_result');
			$this->db->from('student');
			$this->db->join('test_whooley','student.student_id  = test_whooley.whooley_user');
			$this->db->where('whooley_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_whov2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,whooley_date,whooley_q1,whooley_q2,whooley_score,whooley_result');
			$this->db->from('staff');
			$this->db->join('test_whooley','staff.staff_id  = test_whooley.whooley_user');
			$this->db->where('whooley_status','COMPLETE');
			return $query = $this->db->get()->result();
		}

		function get_dasv1(){
			$this->db->select('student_name,student_no,student_email,student_phone,dass_date,dass_stress,dass_anxiety,dass_depression');
			$this->db->from('student');
			$this->db->join('test_dass','student.student_id  = test_dass.dass_user');
			$this->db->where('dass_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_dasv2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,dass_date,dass_stress,dass_anxiety,dass_depression');
			$this->db->from('staff');
			$this->db->join('test_dass','staff.staff_id  = test_dass.dass_user');
			$this->db->where('dass_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_baiv1(){
			$this->db->select('student_name,student_no,student_email,student_phone,bai_date,bai_result');
			$this->db->from('student');
			$this->db->join('test_bai','student.student_id  = test_bai.bai_user');
			$this->db->where('bai_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_baiv2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,bai_date,bai_result');
			$this->db->from('staff');
			$this->db->join('test_bai','staff.staff_id  = test_bai.bai_user');
			$this->db->where('bai_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_bdiv1(){
			$this->db->select('student_name,student_no,student_email,student_phone,bdi_date,bdi_result');
			$this->db->from('student');
			$this->db->join('test_bdi','student.student_id  = test_bdi.bdi_user');
			$this->db->where('bdi_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_bdiv2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,bdi_date,bdi_result');
			$this->db->from('staff');
			$this->db->join('test_bdi','staff.staff_id  = test_bdi.bdi_user');
			$this->db->where('bdi_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_mbtv1(){
			$this->db->select('student_name,student_no,student_email,student_phone,mbti_date,mbti_result');
			$this->db->from('student');
			$this->db->join('test_mbti','student.student_id  = test_mbti.mbti_user');
			$this->db->where('mbti_status','COMPLETE');
			return $query = $this->db->get()->result();
		}
		function get_mbtv2(){
			$this->db->select('staff_name,staff_no,staff_email,staff_phone,mbti_date,mbti_result');
			$this->db->from('staff');
			$this->db->join('test_mbti','staff.staff_id  = test_mbti.mbti_user');
			$this->db->where('mbti_status','COMPLETE');
			return $query = $this->db->get()->result();
		}

		function data_client_student($d1,$d2){
			$this->db->select('appt_date,appt_time,student_no, student_name, student_icpp ,student_phone ,student_program , student_faculty ,student_semester ');
			$this->db->from('student');
			$this->db->join('appointment','appointment.appt_client = student.student_id');
			$this->db->where('appt_status','ACCEPTED');
			$this->db->where("extract(month from appt_date) = '$d1'");
			$this->db->where("extract(year from appt_date) = '$d2'");
			$this->db->order_by('appt_date','asc');
			return $query = $this->db->get()->result();
		}

		function data_client_staff($d1,$d2){
			$this->db->select('appt_date,appt_time,staff_no, staff_name, staff_icpp ,staff_phone ,staff_department');
			$this->db->from('staff');
			$this->db->join('appointment','appointment.appt_client = staff.staff_id');
			$this->db->where('appt_status','ACCEPTED');
			$this->db->where("extract(month from appt_date) = '$d1'");
			$this->db->where("extract(year from appt_date) = '$d2'");
			$this->db->order_by('appt_date','asc');
			return $query = $this->db->get()->result();
		}

		function data_client_student1($d3,$d4){
			$this->db->select('appt_date,appt_time,student_no, student_name, student_icpp ,student_phone ,student_program , student_faculty ,student_semester ');
			$this->db->from('student');
			$this->db->join('appointment','appointment.appt_client = student.student_id');
			$this->db->where('appt_status','ACCEPTED');
			$this->db->where("appt_date >=",$d3);
			$this->db->where("appt_date <=",$d4);
			$this->db->order_by('appt_date','asc');
			return $query = $this->db->get()->result();
		}

		function data_client_staff1($d3,$d4){
			$this->db->select('appt_date,appt_time,staff_no, staff_name, staff_icpp ,staff_phone ,staff_department');
			$this->db->from('staff');
			$this->db->join('appointment','appointment.appt_client = staff.staff_id');
			$this->db->where('appt_status','ACCEPTED');
			$this->db->where("appt_date >=",$d3);
			$this->db->where("appt_date <=",$d4);
			$this->db->order_by('appt_date','asc');
			return $query = $this->db->get()->result();
		}

		function data_psycho($d1,$d2,$d3,$d4,$d5){
			if($d1 == 'student'){
				if($d2 == 'GAD'){
					$this->db->select('gad_date, student_no, student_name, student_faculty ,student_phone, gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
					$this->db->from('student');
					$this->db->join('test_gad','test_gad.gad_user = student.student_id');
					$this->db->where("extract(month from gad_date) = '$d3'");
					$this->db->where("extract(year from gad_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('gad_status','COMPLETE');
					$this->db->order_by('gad_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'PHQ'){
					$this->db->select('phq_date, student_no, student_name, student_faculty ,student_phone, phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
					$this->db->from('student');
					$this->db->join('test_phq','test_phq.phq_user = student.student_id');
					$this->db->where("extract(month from phq_date) = '$d3'");
					$this->db->where("extract(year from phq_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('phq_status','COMPLETE');
					$this->db->order_by('phq_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'Whooley'){
					$this->db->select('whooley_date, student_no, student_name, student_faculty ,student_phone, whooley_q1,whooley_q2,whooley_score,whooley_result');
					$this->db->from('student');
					$this->db->join('test_whooley','test_whooley.whooley_user = student.student_id');
					$this->db->where("extract(month from whooley_date) = '$d3'");
					$this->db->where("extract(year from whooley_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('whooley_status','COMPLETE');
					$this->db->order_by('whooley_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'DASS'){
					$this->db->select('dass_date, student_no, student_name, student_faculty ,student_phone, dass_q1,dass_q2,dass_q3,dass_q4,dass_q5,dass_q6,dass_q7,dass_q8,dass_q9,dass_q10,dass_q11,dass_q12,dass_q13,dass_q14,dass_q15,dass_q16,dass_q17,dass_q18,dass_q19,dass_q20,dass_q21,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
					$this->db->from('student');
					$this->db->join('test_dass','test_dass.dass_user = student.student_id');
					$this->db->where("extract(month from dass_date) = '$d3'");
					$this->db->where("extract(year from dass_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('dass_status','COMPLETE');
					$this->db->order_by('dass_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BAI'){
					$this->db->select('*');
					$this->db->from('student');
					$this->db->join('test_bai','test_bai.bai_user = student.student_id');
					$this->db->where("extract(month from bai_date) = '$d3'");
					$this->db->where("extract(year from bai_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('bai_status','COMPLETE');
					$this->db->order_by('bai_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BDI'){
					$this->db->select('*');
					$this->db->from('student');
					$this->db->join('test_bdi','test_bdi.bdi_user = student.student_id');
					$this->db->where("extract(month from bdi_date) = '$d3'");
					$this->db->where("extract(year from bdi_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('bdi_status','COMPLETE');
					$this->db->order_by('bdi_date','asc');
					return $query = $this->db->get()->result();
				}else{
					$this->db->select('mbti_date, student_no, student_name, student_faculty ,student_phone,mbti_result');
					$this->db->from('student');
					$this->db->join('test_mbti','test_mbti.mbti_user = student.student_id');
					$this->db->where("extract(month from mbti_date) = '$d3'");
					$this->db->where("extract(year from mbti_date) = '$d4'");
					$this->db->where('student_faculty',$d5);
					$this->db->where('mbti_status','COMPLETE');
					$this->db->order_by('mbti_date','asc');
					return $query = $this->db->get()->result();
				}
			}else{
				if($d2 == 'GAD'){
					$this->db->select('gad_date, staff_no, staff_name, staff_department ,staff_phone, gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
					$this->db->from('staff');
					$this->db->join('test_gad','test_gad.gad_user = staff.staff_id');
					$this->db->where("extract(month from gad_date) = '$d3'");
					$this->db->where("extract(year from gad_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('gad_status','COMPLETE');
					$this->db->order_by('gad_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'PHQ'){
					$this->db->select('phq_date, staff_no, staff_name, staff_department ,staff_phone, phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
					$this->db->from('staff');
					$this->db->join('test_phq','test_phq.phq_user = staff.staff_id');
					$this->db->where("extract(month from phq_date) = '$d3'");
					$this->db->where("extract(year from phq_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('phq_status','COMPLETE');
					$this->db->order_by('phq_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'Whooley'){
					$this->db->select('whooley_date, staff_no, staff_name, staff_department ,staff_phone, whooley_q1,whooley_q2,whooley_score,whooley_result');
					$this->db->from('staff');
					$this->db->join('test_whooley','test_whooley.whooley_user = staff.staff_id');
					$this->db->where("extract(month from whooley_date) = '$d3'");
					$this->db->where("extract(year from whooley_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('whooley_status','COMPLETE');
					$this->db->order_by('whooley_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'DASS'){
					$this->db->select('dass_date, staff_no, staff_name, staff_department ,staff_phone, dass_q1,dass_q2,dass_q3,dass_q4,dass_q5,dass_q6,dass_q7,dass_q8,dass_q9,dass_q10,dass_q11,dass_q12,dass_q13,dass_q14,dass_q15,dass_q16,dass_q17,dass_q18,dass_q19,dass_q20,dass_q21,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
					$this->db->from('staff');
					$this->db->join('test_dass','test_dass.dass_user = staff.staff_id');
					$this->db->where("extract(month from dass_date) = '$d3'");
					$this->db->where("extract(year from dass_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('dass_status','COMPLETE');
					$this->db->order_by('dass_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BAI'){
					$this->db->select('*');
					$this->db->from('staff');
					$this->db->join('test_bai','test_bai.bai_user = staff.staff_id');
					$this->db->where("extract(month from bai_date) = '$d3'");
					$this->db->where("extract(year from bai_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('bai_status','COMPLETE');
					$this->db->order_by('bai_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BDI'){
					$this->db->select('*');
					$this->db->from('staff');
					$this->db->join('test_bdi','test_bdi.bdi_user = staff.staff_id');
					$this->db->where("extract(month from bdi_date) = '$d3'");
					$this->db->where("extract(year from bdi_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('bdi_status','COMPLETE');
					$this->db->order_by('bdi_date','asc');
					return $query = $this->db->get()->result();
				}else{
					$this->db->select('mbti_date, staff_no, staff_name, staff_department ,staff_phone,mbti_result');
					$this->db->from('staff');
					$this->db->join('test_mbti','test_mbti.mbti_user = staff.staff_id');
					$this->db->where("extract(month from mbti_date) = '$d3'");
					$this->db->where("extract(year from mbti_date) = '$d4'");
					$this->db->where('staff_department',$d5);
					$this->db->where('mbti_status','COMPLETE');
					$this->db->order_by('mbti_date','asc');
					return $query = $this->db->get()->result();
				}
			}
		}

		function data_psycho1($d1,$d2,$d3,$d4,$d5){
			if($d1 == 'student'){
				if($d2 == 'GAD'){
					$this->db->select('gad_date, student_no, student_name, student_faculty ,student_phone, gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
					$this->db->from('student');
					$this->db->join('test_gad','test_gad.gad_user = student.student_id');
					$this->db->where("gad_date >=",$d3);
					$this->db->where("gad_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('gad_status','COMPLETE');
					$this->db->order_by('gad_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'PHQ'){
					$this->db->select('phq_date, student_no, student_name, student_faculty ,student_phone, phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
					$this->db->from('student');
					$this->db->join('test_phq','test_phq.phq_user = student.student_id');
					$this->db->where("phq_date >=",$d3);
					$this->db->where("phq_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('phq_status','COMPLETE');
					$this->db->order_by('phq_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'Whooley'){
					$this->db->select('whooley_date, student_no, student_name, student_faculty ,student_phone, whooley_q1,whooley_q2,whooley_score,whooley_result');
					$this->db->from('student');
					$this->db->join('test_whooley','test_whooley.whooley_user = student.student_id');
					$this->db->where("whooley_date >=",$d3);
					$this->db->where("whooley_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('whooley_status','COMPLETE');
					$this->db->order_by('whooley_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'DASS'){
					$this->db->select('dass_date, student_no, student_name, student_faculty ,student_phone, dass_q1,dass_q2,dass_q3,dass_q4,dass_q5,dass_q6,dass_q7,dass_q8,dass_q9,dass_q10,dass_q11,dass_q12,dass_q13,dass_q14,dass_q15,dass_q16,dass_q17,dass_q18,dass_q19,dass_q20,dass_q21,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
					$this->db->from('student');
					$this->db->join('test_dass','test_dass.dass_user = student.student_id');
					$this->db->where("dass_date >=",$d3);
					$this->db->where("dass_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('dass_status','COMPLETE');
					$this->db->order_by('dass_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BAI'){
					$this->db->select('bai_date, student_no, student_name, student_faculty ,student_phone,bai_score,bai_result');
					$this->db->from('student');
					$this->db->join('test_bai','test_bai.bai_user = student.student_id');
					$this->db->where("bai_date >=",$d3);
					$this->db->where("bai_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('bai_status','COMPLETE');
					$this->db->order_by('bai_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BDI'){
					$this->db->select('bdi_date, student_no, student_name, student_faculty ,student_phone,bdi_score,bdi_result');
					$this->db->from('student');
					$this->db->join('test_bdi','test_bdi.bdi_user = student.student_id');
					$this->db->where("bdi_date >=",$d3);
					$this->db->where("bdi_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('bdi_status','COMPLETE');
					$this->db->order_by('bdi_date','asc');
					return $query = $this->db->get()->result();
				}else{
					$this->db->select('mbti_date, student_no, student_name, student_faculty ,student_phone,mbti_result');
					$this->db->from('student');
					$this->db->join('test_mbti','test_mbti.mbti_user = student.student_id');
					$this->db->where("mbti_date >=",$d3);
					$this->db->where("mbti_date <=",$d4);
					$this->db->where('student_faculty',$d5);
					$this->db->where('mbti_status','COMPLETE');
					$this->db->order_by('mbti_date','asc');
					return $query = $this->db->get()->result();
				}
			}else{
				if($d2 == 'GAD'){
					$this->db->select('gad_date, staff_no, staff_name, staff_faculty ,staff_phone, gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
					$this->db->from('staff');
					$this->db->join('test_gad','test_gad.gad_user = staff.staff_id');
					$this->db->where("gad_date >=",$d3);
					$this->db->where("gad_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('gad_status','COMPLETE');
					$this->db->order_by('gad_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'PHQ'){
					$this->db->select('phq_date, staff_no, staff_name, staff_department ,staff_phone, phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
					$this->db->from('staff');
					$this->db->join('test_phq','test_phq.phq_user = staff.staff_id');
					$this->db->where("phq_date >=",$d3);
					$this->db->where("phq_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('phq_status','COMPLETE');
					$this->db->order_by('phq_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'Whooley'){
					$this->db->select('whooley_date, staff_no, staff_name, staff_department ,staff_phone, whooley_q1,whooley_q2,whooley_score,whooley_result');
					$this->db->from('staff');
					$this->db->join('test_whooley','test_whooley.whooley_user = staff.staff_id');
					$this->db->where("whooley_date >=",$d3);
					$this->db->where("whooley_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('whooley_status','COMPLETE');
					$this->db->order_by('whooley_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'DASS'){
					$this->db->select('dass_date, staff_no, staff_name, staff_department ,staff_phone, dass_q1,dass_q2,dass_q3,dass_q4,dass_q5,dass_q6,dass_q7,dass_q8,dass_q9,dass_q10,dass_q11,dass_q12,dass_q13,dass_q14,dass_q15,dass_q16,dass_q17,dass_q18,dass_q19,dass_q20,dass_q21,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
					$this->db->from('staff');
					$this->db->join('test_dass','test_dass.dass_user = staff.staff_id');
					$this->db->where("dass_date >=",$d3);
					$this->db->where("dass_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('dass_status','COMPLETE');
					$this->db->order_by('dass_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BAI'){
					$this->db->select('bai_date, staff_no, staff_name, staff_department ,staff_phone,bai_score,bai_result');
					$this->db->from('staff');
					$this->db->join('test_bai','test_bai.bai_user = staff.staff_id');
					$this->db->where("bai_date >=",$d3);
					$this->db->where("bai_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('bai_status','COMPLETE');
					$this->db->order_by('bai_date','asc');
					return $query = $this->db->get()->result();
				}elseif($d2 == 'BDI'){
					$this->db->select('bdi_date, staff_no, staff_name, staff_department ,staff_phone,bdi_score,bdi_result');
					$this->db->from('staff');
					$this->db->join('test_bdi','test_bdi.bdi_user = staff.staff_id');
					$this->db->where("bdi_date >=",$d3);
					$this->db->where("bdi_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('bdi_status','COMPLETE');
					$this->db->order_by('bdi_date','asc');
					return $query = $this->db->get()->result();
				}else{
					$this->db->select('mbti_date, staff_no, staff_name, staff_department ,staff_phone,mbti_result');
					$this->db->from('staff');
					$this->db->join('test_mbti','test_mbti.mbti_user = staff.staff_id');
					$this->db->where("mbti_date >=",$d3);
					$this->db->where("mbti_date <=",$d4);
					$this->db->where('staff_department',$d5);
					$this->db->where('mbti_status','COMPLETE');
					$this->db->order_by('mbti_date','asc');
					return $query = $this->db->get()->result();
				}
			}
		}

		function test_gad($id){
			$this->db->select('*');
			$this->db->from('test_gad');
			$this->db->join('student','test_gad.gad_user = student.student_id');
			$this->db->where('gad_id',$id);
			return $this->db->get()->result();
		}

		function test_gad1($id){
			$this->db->select('*');
			$this->db->from('test_gad');
			$this->db->join('staff','test_gad.gad_user = staff.staff_id');
			$this->db->where('gad_id',$id);
			return $this->db->get()->result();
		}

		function test_phq($id){
			$this->db->select('*');
			$this->db->from('test_phq');
			$this->db->join('student','test_phq.phq_user = student.student_id');
			$this->db->where('phq_id',$id);
			return $this->db->get()->result();
		}

		function test_phq1($id){
			$this->db->select('*');
			$this->db->from('test_phq');
			$this->db->join('staff','test_phq.phq_user = staff.staff_id');
			$this->db->where('phq_id',$id);
			return $this->db->get()->result();
		}

		function test_whooley($id){
			$this->db->select('*');
			$this->db->from('test_whooley');
			$this->db->join('student','test_whooley.whooley_user = student.student_id');
			$this->db->where('whooley_id',$id);
			return $this->db->get()->result();
		}

		function test_whooley1($id){
			$this->db->select('*');
			$this->db->from('test_whooley');
			$this->db->join('staff','test_whooley.whooley_user = staff.staff_id');
			$this->db->where('whooley_id',$id);
			return $this->db->get()->result();
		}

		function test_dass($id){
			$this->db->select('*');
			$this->db->from('test_dass');
			$this->db->join('student','test_dass.dass_user = student.student_id');
			$this->db->where('dass_id',$id);
			return $this->db->get()->result();
		}

		function test_dass1($id){
			$this->db->select('*');
			$this->db->from('test_dass');
			$this->db->join('staff','test_dass.dass_user = staff.staff_id');
			$this->db->where('dass_id',$id);
			return $this->db->get()->result();
		}

		function test_bdi($id){
			$this->db->select('*');
			$this->db->from('test_bdi');
			$this->db->join('student','test_bdi.bdi_user = student.student_id');
			$this->db->where('bdi_id',$id);
			return $this->db->get()->result();
		}

		function test_bdi1($id){
			$this->db->select('*');
			$this->db->from('test_bdi');
			$this->db->join('staff','test_bdi.bdi_user = staff.staff_id');
			$this->db->where('bdi_id',$id);
			return $this->db->get()->result();
		}

		function test_bai($id){
			$this->db->select('*');
			$this->db->from('test_bai');
			$this->db->join('student','test_bai.bai_user = student.student_id');
			$this->db->where('bai_id',$id);
			return $this->db->get()->result();
		}

		function test_bai1($id){
			$this->db->select('*');
			$this->db->from('test_bai');
			$this->db->join('staff','test_bai.bai_user = staff.staff_id');
			$this->db->where('bai_id',$id);
			return $this->db->get()->result();
		}

		function test_mbti($id){
			$this->db->select('*');
			$this->db->from('test_mbti');
			$this->db->join('student','test_mbti.mbti_user = student.student_id');
			$this->db->where('mbti_id',$id);
			return $this->db->get()->result();
		}

		function test_mbti1($id){
			$this->db->select('*');
			$this->db->from('test_mbti');
			$this->db->join('staff','test_mbti.mbti_user = staff.staff_id');
			$this->db->where('mbti_id',$id);
			return $this->db->get()->result();
		}

		function find_counselor(){
			$this->db->select('staff_name');
			$this->db->from('staff');
			$this->db->where('staff_id',$this->session->userdata('user_id'));
			return $this->db->get()->result();
		}

		function get_clinical($id1,$id2){
			$this->db->select('gad_session,gad_score,gad_result,phq_score,phq_result,whooley_result,whooley_score,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
			$this->db->from('test_gad');
			$this->db->join('test_phq','test_phq.phq_session = test_gad.gad_session');
			$this->db->join('test_whooley','test_whooley.whooley_session = test_phq.phq_session');
			$this->db->join('test_dass','test_dass.dass_session = test_whooley.whooley_session');
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('dass_status','COMPLETE');
			$this->db->where('gad_user',$id1);
			$this->db->where('phq_user',$id1);
			$this->db->where('whooley_user',$id1);
			$this->db->where('dass_user',$id1);
			$this->db->where('gad_session',$id2);
			return $this->db->get()->result();
		}
		function get_clinical1($id1,$id2){
			$this->db->select('gad_session,gad_score,gad_result,phq_score,phq_result,whooley_result,whooley_score,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
			$this->db->from('test_gad');
			$this->db->join('test_phq','test_phq.phq_session = test_gad.gad_session');
			$this->db->join('test_whooley','test_whooley.whooley_session = test_phq.phq_session');
			$this->db->join('test_dass','test_dass.dass_session = test_whooley.whooley_session');
			$this->db->where('gad_status','COMPLETE');
			$this->db->where('phq_status','COMPLETE');
			$this->db->where('whooley_status','COMPLETE');
			$this->db->where('dass_status','COMPLETE');
			$this->db->where('gad_user',$id1);
			$this->db->where('phq_user',$id1);
			$this->db->where('whooley_user',$id1);
			$this->db->where('dass_user',$id1);
			$this->db->where('gad_session',$id2);
			return $this->db->get()->result();
		}

		function d1_gad($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_gad');
			$this->db->where('gad_user',$id1);
			$this->db->where('gad_id',$id2);
			return $this->db->get()->result();
		}
		function d1_phq($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_phq');
			$this->db->where('phq_user',$id1);
			$this->db->where('phq_id',$id2);
			return $this->db->get()->result();
		}
		function d1_whooley($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_whooley');
			$this->db->where('whooley_user',$id1);
			$this->db->where('whooley_id',$id2);
			return $this->db->get()->result();
		}
		function d1_dass($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_dass');
			$this->db->where('dass_user',$id1);
			$this->db->where('dass_id',$id2);
			return $this->db->get()->result();
		}
		function d1_bai($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_bai');
			$this->db->where('bai_user',$id1);
			$this->db->where('bai_id',$id2);
			return $this->db->get()->result();
		}
		function d1_bdi($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_bdi');
			$this->db->where('bdi_user',$id1);
			$this->db->where('bdi_id',$id2);
			return $this->db->get()->result();
		}
		function d1_mbti($id1,$id2){
			$this->db->select('*');
			$this->db->from('test_mbti');
			$this->db->where('mbti_user',$id1);
			$this->db->where('mbti_id',$id2);
			return $this->db->get()->result();
		}

		function orio_data($d2){
			if($d2 == 'GAD'){
				$this->db->select('gad_date, student_no, student_name, student_faculty ,student_phone, gad_q1,gad_q2,gad_q3,gad_q4,gad_q5,gad_q6,gad_q7,gad_score,gad_result');
				$this->db->from('student');
				$this->db->join('test_gad','test_gad.gad_user = student.student_id');
				$this->db->where('gad_status','COMPLETE');
				$this->db->where('gad_info','ORIENTATION');
				$this->db->order_by('gad_date','asc');
				return $query = $this->db->get()->result();
			}elseif($d2 == 'PHQ'){
				$this->db->select('phq_date, student_no, student_name, student_faculty ,student_phone, phq_q1,phq_q2,phq_q3,phq_q4,phq_q5,phq_q6,phq_q7,phq_q8,phq_q9,phq_score,phq_result');
				$this->db->from('student');
				$this->db->join('test_phq','test_phq.phq_user = student.student_id');
				$this->db->where('phq_status','COMPLETE');
				$this->db->where('phq_info','ORIENTATION');
				$this->db->order_by('phq_date','asc');
				return $query = $this->db->get()->result();
			}elseif($d2 == 'Whooley'){
				$this->db->select('whooley_date, student_no, student_name, student_faculty ,student_phone, whooley_q1,whooley_q2,whooley_score,whooley_result');
				$this->db->from('student');
				$this->db->join('test_whooley','test_whooley.whooley_user = student.student_id');
				$this->db->where('whooley_status','COMPLETE');
				$this->db->where('whooley_info','ORIENTATION');
				$this->db->order_by('whooley_date','asc');
				return $query = $this->db->get()->result();
			}else{
				$this->db->select('dass_date, student_no, student_name, student_faculty ,student_phone, dass_q1,dass_q2,dass_q3,dass_q4,dass_q5,dass_q6,dass_q7,dass_q8,dass_q9,dass_q10,dass_q11,dass_q12,dass_q13,dass_q14,dass_q15,dassq16,dass_q17,dass_q18,dass_q19,dass_q20,dass_q21,dass_stress,dass_anxiety,dass_depression,stress_score,anxiety_score,depression_score');
				$this->db->from('student');
				$this->db->join('test_dass','test_dass.dass_user = student.student_id');
				$this->db->where('dass_status','COMPLETE');
				$this->db->where('dass_info','ORIENTATION');
				$this->db->order_by('dass_date','asc');
				return $query = $this->db->get()->result();
			}
		}
		
	}

?>