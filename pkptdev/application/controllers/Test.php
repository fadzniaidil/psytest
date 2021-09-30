<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function gad7($id){
		$data['title'] = 'GAD7';
		$this->session->set_userdata('gad_id',$id);
		$this->load->view('PsyTest/Test/gad7',$data);
	}

	public function phq9($id)
	{
		$data['title'] = 'PHQ9';
		$this->session->set_userdata('phq_id',$id);
		$this->load->view('PsyTest/Test/phq9', $data);
	}

	public function whooley($id)
	{
		$data['title'] = 'WHOOLEY';
		$this->session->set_userdata('whooley_id',$id);
		$this->load->view('PsyTest/Test/whooley', $data);
	}

	public function bdi($id)
	{
		$data['title'] = 'BDI';
		$this->session->set_userdata('bdi_id',$id);
		$this->load->view('PsyTest/Test/bdi', $data);
	}

	public function bai($id)
	{
		$data['title'] = 'BAI';
		$this->session->set_userdata('bai_id',$id);
		$this->load->view('PsyTest/Test/bai', $data);
	}

	public function dass($id)
	{
		$data['title'] = 'DASS';
		$this->session->set_userdata('dass_id',$id);
		$this->load->view('PsyTest/Test/dass', $data);
	}

	public function mbti($id)
	{
		$data['title'] = 'MBTI';
		$this->session->set_userdata('mbti_id',$id);
		$this->load->view('PsyTest/Test/mbti', $data);
	}

	public function gadresult(){
			$q1 = $this->input->post('qgad1');
			$q2 = $this->input->post('qgad2');
			$q3 = $this->input->post('qgad3');
			$q4 = $this->input->post('qgad4');
			$q5 = $this->input->post('qgad5');
			$q6 = $this->input->post('qgad6');
			$q7 = $this->input->post('qgad7');

			$gadlist = [$q1, $q2, $q3, $q4, $q5, $q6, $q7];

			function gadcal($gadlist)
			{
				$value = 0;
				foreach ($gadlist as $data) {
					$value = $data + $value;
				}
				return $value;
			}

			function gadpart($value)
			{
				if (0 <= $value and $value < 6) {
					return "NONE";
				} elseif (6 <= $value and $value < 11) {
					return "MILD";
				} elseif (11 <= $value and $value < 16) {
					return "MODERATE";
				} else {
					return "SEVERE";
				}
			}
			$id = $this->session->userdata('gad_id');
			$date = mdate("%Y-%m-%d");
			$tvalue = gadcal($gadlist);
			$tahap = gadpart($tvalue);
			$stat = 'COMPLETE';

			$data = array(
				'gad_date' => $date,
				'gad_status' => $stat,
				'gad_q1' => $q1,
				'gad_q2' => $q2,
				'gad_q3' => $q3,
				'gad_q4' => $q4,
				'gad_q5' => $q5,
				'gad_q6' => $q6,
				'gad_q7' => $q7,
				'gad_score' => $tvalue,
				'gad_result' => $tahap
			);
			$this->test_model->update_gad($id,$data);
			$this->session->unset_userdata('gad_id');
			$this->session->set_userdata('test','test');
			redirect('client/dashboard');

		}

		public function phqresult(){
			$q1 = $this->input->post('qphq1');
			$q2 = $this->input->post('qphq2');
			$q3 = $this->input->post('qphq3');
			$q4 = $this->input->post('qphq4');
			$q5 = $this->input->post('qphq5');
			$q6 = $this->input->post('qphq6');
			$q7 = $this->input->post('qphq7');
			$q8 = $this->input->post('qphq8');
			$q9 = $this->input->post('qphq9');

			$phqlist = [$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9];

			function phqcal($phqlist)
			{
				$value = 0;
				foreach ($phqlist as $data) {
					$value = $data + $value;
				}
				return $value;
			}

			function phqpart($value)
			{
				if (0 <= $value and $value < 5) {
					return "NONE";
				} elseif (5 <= $value and $value < 10) {
					return "MILD";
				} elseif (10 <= $value and $value < 15) {
					return "MODERATE";
				} elseif (15 <= $value and $value < 20) {
					return "MODERATE SEVERE";
				} else {
					return "SEVERE";
				}
			}

			$id = $this->session->userdata('phq_id');
			$date = mdate("%Y-%m-%d");
			$tvalue = phqcal($phqlist);
			$tahap = phqpart($tvalue);
			$stat = 'COMPLETE';

			$data = array(
				'phq_date' => $date,
				'phq_status' => $stat,
				'phq_q1' => $q1,
				'phq_q2' => $q2,
				'phq_q3' => $q3,
				'phq_q4' => $q4,
				'phq_q5' => $q5,
				'phq_q6' => $q6,
				'phq_q7' => $q7,
				'phq_q8' => $q8,
				'phq_q9' => $q9,
				'phq_score' => $tvalue,
				'phq_result' => $tahap
			);
			$this->test_model->update_phq($id,$data);
			$this->session->unset_userdata('phq_id');
			$this->session->set_userdata('test','test');
			redirect('client/dashboard');
		}

		public function whooleyresult(){
			$q1 = $this->input->post('qwho1');
			$q2 = $this->input->post('qwho2');
			$q = $q1 + $q2;

			if( $q == 0){
				$res = 'NEGATIVE';
			}else{
				$res ='POSITIVE';
			}

			$id = $this->session->userdata('whooley_id');
			$date = mdate("%Y-%m-%d");
			$stat = 'COMPLETE';

			$data = array(
				'whooley_date' => $date,
				'whooley_status' => $stat,
				'whooley_q1' => $q1,
				'whooley_q2' => $q2,
				'whooley_score' => $q,
				'whooley_result' => $res
			);
			$this->test_model->update_whooley($id,$data);
			$this->session->unset_userdata('whooley_id');
			$this->session->set_userdata('test','test');
			redirect('client/dashboard');
		}

		public function bdiresult(){
			$q1 = $this->input->post('qbdi1');
			$q2 = $this->input->post('qbdi2');
			$q3 = $this->input->post('qbdi3');
			$q4 = $this->input->post('qbdi4');
			$q5 = $this->input->post('qbdi5');
			$q6 = $this->input->post('qbdi6');
			$q7 = $this->input->post('qbdi7');
			$q8 = $this->input->post('qbdi8');
			$q9 = $this->input->post('qbdi9');
			$q10 = $this->input->post('qbdi10');
			$q11 = $this->input->post('qbdi11');
			$q12 = $this->input->post('qbdi12');
			$q13 = $this->input->post('qbdi13');
			$q14 = $this->input->post('qbdi14');
			$q15 = $this->input->post('qbdi15');
			$q16 = $this->input->post('qbdi16');
			$q17 = $this->input->post('qbdi17');
			$q18 = $this->input->post('qbdi18');
			$q19 = $this->input->post('qbdi19');
			$q20 = $this->input->post('qbdi20');
			$q21 = $this->input->post('qbdi21');

			$bdilist = [$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$q21];

			function bdical($bdilist)
			{
				$value = 0;
				foreach ($bdilist as $data) {
					$value = $data + $value;
				}
				return $value;
			}

			function bdipart($value)
			{
				if (0 <= $value and $value < 14) {
					return "MINIMAL";
				} elseif (14 <= $value and $value < 20) {
					return "MILD";
				} elseif (20 <= $value and $value < 29) {
					return "MODERATE";
				} else {
					return "SEVERE";
				}
			}

			$id = $this->session->userdata('bdi_id');
			$date = mdate("%Y-%m-%d");
			$tvalue = bdical($bdilist);
			$tahap = bdipart($tvalue);
			$stat = 'COMPLETE';

			$data = array(
				'bdi_date' => $date,
				'bdi_status' => $stat,
				'bdi_score' => $tvalue,
				'bdi_result' => $tahap,
				'bdi_q1' => $q1,
				'bdi_q2' => $q2,
				'bdi_q3' => $q3,
				'bdi_q4' => $q4,
				'bdi_q5' => $q5,
				'bdi_q6' => $q6,
				'bdi_q7' => $q7,
				'bdi_q8' => $q8,
				'bdi_q9' => $q9,
				'bdi_q10' => $q10,
				'bdi_q11' => $q11,
				'bdi_q12' => $q12,
				'bdi_q13' => $q13,
				'bdi_q14' => $q14,
				'bdi_q15' => $q15,
				'bdi_q16' => $q16,
				'bdi_q17' => $q17,
				'bdi_q18' => $q18,
				'bdi_q19' => $q19,
				'bdi_q20' => $q20,
				'bdi_q21' => $q21
			);
			$this->test_model->update_bdi($id,$data);
			$this->session->unset_userdata('bdi_id');
			$this->session->set_userdata('test','test');
			redirect('client/dashboard');
		}

		public function bairesult(){
			$q1 = $this->input->post('qbai1');
			$q2 = $this->input->post('qbai2');
			$q3 = $this->input->post('qbai3');
			$q4 = $this->input->post('qbai4');
			$q5 = $this->input->post('qbai5');
			$q6 = $this->input->post('qbai6');
			$q7 = $this->input->post('qbai7');
			$q8 = $this->input->post('qbai8');
			$q9 = $this->input->post('qbai9');
			$q10 = $this->input->post('qbai10');
			$q11 = $this->input->post('qbai11');
			$q12 = $this->input->post('qbai12');
			$q13 = $this->input->post('qbai13');
			$q14 = $this->input->post('qbai14');
			$q15 = $this->input->post('qbai15');
			$q16 = $this->input->post('qbai16');
			$q17 = $this->input->post('qbai17');
			$q18 = $this->input->post('qbai18');
			$q19 = $this->input->post('qbai19');
			$q20 = $this->input->post('qbai20');
			$q21 = $this->input->post('qbai21');

			$bailist = [$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$q21];

			function baical($bailist)
			{
				$value = 0;
				foreach ($bailist as $data) {
					$value = $data + $value;
				}
				return $value;
			}

			function baipart($value)
			{
				if (0 <= $value and $value < 22) {
					return "LOW";
				} elseif (22 <= $value and $value < 36) {
					return "MODERATE";
				} else {
					return "SEVERE";
				}
			}

			$id = $this->session->userdata('bai_id');
			$date = mdate("%Y-%m-%d");
			$tvalue = baical($bailist);
			$tahap = baipart($tvalue);
			$stat = 'COMPLETE';

			$data = array(
				'bai_date' => $date,
				'bai_status' => $stat,
				'bai_score' => $tvalue,
				'bai_result' => $tahap,
				'bai_q1' => $q1,
				'bai_q2' => $q2,
				'bai_q3' => $q3,
				'bai_q4' => $q4,
				'bai_q5' => $q5,
				'bai_q6' => $q6,
				'bai_q7' => $q7,
				'bai_q8' => $q8,
				'bai_q9' => $q9,
				'bai_q10' => $q10,
				'bai_q11' => $q11,
				'bai_q12' => $q12,
				'bai_q13' => $q13,
				'bai_q14' => $q14,
				'bai_q15' => $q15,
				'bai_q16' => $q16,
				'bai_q17' => $q17,
				'bai_q18' => $q18,
				'bai_q19' => $q19,
				'bai_q20' => $q20,
				'bai_q21' => $q21
			);
			$this->test_model->update_bai($id,$data);
			$this->session->unset_userdata('bai_id');
			$this->session->set_userdata('test','test');
			redirect('client/dashboard');
		}

		public function dassresult(){
			$q1 = $this->input->post('qdass1');
			$q2 = $this->input->post('qdass2');
			$q3 = $this->input->post('qdass3');
			$q4 = $this->input->post('qdass4');
			$q5 = $this->input->post('qdass5');
			$q6 = $this->input->post('qdass6');
			$q7 = $this->input->post('qdass7');
			$q8 = $this->input->post('qdass8');
			$q9 = $this->input->post('qdass9');
			$q10 = $this->input->post('qdass10');
			$q11 = $this->input->post('qdass11');
			$q12 = $this->input->post('qdass12');
			$q13 = $this->input->post('qdass13');
			$q14 = $this->input->post('qdass14');
			$q15 = $this->input->post('qdass15');
			$q16 = $this->input->post('qdass16');
			$q17 = $this->input->post('qdass17');
			$q18 = $this->input->post('qdass18');
			$q19 = $this->input->post('qdass19');
			$q20 = $this->input->post('qdass20');
			$q21 = $this->input->post('qdass21');

			$stress = $q1 + $q6 + $q8 + $q11 + $q12 + $q14 + $q18;
			$anxiety = $q2 + $q4 + $q7 + $q9 + $q15 + $q19 + $q20;
			$depression = $q3 + $q5 + $q10 + $q13 + $q16 + $q17 + $q21;

			if($stress >= 0 and $stress <= 7){
				$res1 = 'NORMAL';
			}elseif($stress >= 8 and $stress <= 9){
				$res1 = 'MILD';
			}elseif($stress >= 10 and $stress <= 12){
				$res1 = 'MODERATE';
			}elseif($stress >= 13 and $stress <= 16){
				$res1 = 'SEVERE';
			}else{
				$res1 = 'EXTREMELY SEVERE';
			}

			if($anxiety >= 0 and $anxiety <= 3){
				$res2 = 'NORMAL';
			}elseif($anxiety >= 4 and $anxiety <= 5){
				$res2 = 'MILD';
			}elseif($anxiety >= 6 and $anxiety <= 7){
				$res2 = 'MODERATE';
			}elseif($anxiety >= 8 and $anxiety <= 9){
				$res2 = 'SEVERE';
			}else{
				$res2 = 'EXTREMELY SEVERE';
			}

			if($depression >= 0 and $depression <= 4){
				$res3 = 'NORMAL';
			}elseif($depression >= 5 and $depression <= 6){
				$res3 = 'MILD';
			}elseif($depression >= 7 and $depression <= 10){
				$res3 = 'MODERATE';
			}elseif($depression >= 11 and $depression <= 13){
				$res3 = 'SEVERE';
			}else{
				$res3 = 'EXTREMELY SEVERE';
			}

			$id = $this->session->userdata('dass_id');
			$date = mdate("%Y-%m-%d");
			$stat = 'COMPLETE';

			$data = array(
				'dass_date' => $date,
				'dass_status' => $stat,
				'dass_stress' => $res1,
				'dass_anxiety' => $res2,
				'dass_depression' => $res3,
				'dass_q1' => $q1,
				'dass_q2' => $q2,
				'dass_q3' => $q3,
				'dass_q4' => $q4,
				'dass_q5' => $q5,
				'dass_q6' => $q6,
				'dass_q7' => $q7,
				'dass_q8' => $q8,
				'dass_q9' => $q9,
				'dass_q10' => $q10,
				'dass_q11' => $q11,
				'dass_q12' => $q12,
				'dass_q13' => $q13,
				'dass_q14' => $q14,
				'dass_q15' => $q15,
				'dass_q16' => $q16,
				'dass_q17' => $q17,
				'dass_q18' => $q18,
				'dass_q19' => $q19,
				'dass_q20' => $q20,
				'dass_q21' => $q21,
				'stress_score' => $stress,
				'anxiety_score' => $anxiety,
				'depression_score' => $depression
			);
			$this->test_model->update_dass($id,$data);
			$this->session->unset_userdata('dass_id');
			$this->session->set_userdata('test','test');
			redirect('client/dashboard');

		}

		public function mbtiresult(){
			$q1 = $this->input->post('qmbti1');
			$q2 = $this->input->post('qmbti2');
			$q3 = $this->input->post('qmbti3');
			$q4 = $this->input->post('qmbti4');
			$q5 = $this->input->post('qmbti5');
			$q6 = $this->input->post('qmbti6');
			$q7 = $this->input->post('qmbti7');
			$q8 = $this->input->post('qmbti8');
			$q9 = $this->input->post('qmbti9');
			$q10 = $this->input->post('qmbti10');
			$q11 = $this->input->post('qmbti11');
			$q12 = $this->input->post('qmbti12');
			$q13 = $this->input->post('qmbti13');
			$q14 = $this->input->post('qmbti14');
			$q15 = $this->input->post('qmbti15');
			$q16 = $this->input->post('qmbti16');
			$q17 = $this->input->post('qmbti17');
			$q18 = $this->input->post('qmbti18');
			$q19 = $this->input->post('qmbti19');
			$q20 = $this->input->post('qmbti20');
			$q21 = $this->input->post('qmbti21');
			$q22 = $this->input->post('qmbti22');
			$q23 = $this->input->post('qmbti23');
			$q24 = $this->input->post('qmbti24');
			$q25 = $this->input->post('qmbti25');
			$q26 = $this->input->post('qmbti26');
			$q27 = $this->input->post('qmbti27');
			$q28 = $this->input->post('qmbti28');
			$q29 = $this->input->post('qmbti29');
			$q30 = $this->input->post('qmbti30');
			$q31 = $this->input->post('qmbti31');
			$q32 = $this->input->post('qmbti32');
			$q33 = $this->input->post('qmbti33');
			$q34 = $this->input->post('qmbti34');
			$q35 = $this->input->post('qmbti35');
			$q36 = $this->input->post('qmbti36');
			$q37 = $this->input->post('qmbti37');
			$q38 = $this->input->post('qmbti38');
			$q39 = $this->input->post('qmbti39');
			$q40 = $this->input->post('qmbti40');
			$q41 = $this->input->post('qmbti41');
			$q42 = $this->input->post('qmbti42');
			$q43 = $this->input->post('qmbti43');
			$q44 = $this->input->post('qmbti44');
			$q45 = $this->input->post('qmbti45');
			$q46 = $this->input->post('qmbti46');
			$q47 = $this->input->post('qmbti47');
			$q48 = $this->input->post('qmbti48');
			$q49 = $this->input->post('qmbti49');
			$q50 = $this->input->post('qmbti50');
			$q51 = $this->input->post('qmbti51');
			$q52 = $this->input->post('qmbti52');
			$q53 = $this->input->post('qmbti53');
			$q54 = $this->input->post('qmbti54');
			$q55 = $this->input->post('qmbti55');
			$q56 = $this->input->post('qmbti56');
			$q57 = $this->input->post('qmbti57');
			$q58 = $this->input->post('qmbti58');
			$q59 = $this->input->post('qmbti59');
			$q60 = $this->input->post('qmbti60');
			$q61 = $this->input->post('qmbti61');
			$q62 = $this->input->post('qmbti62');
			$q63 = $this->input->post('qmbti63');
			$q64 = $this->input->post('qmbti64');
			$q65 = $this->input->post('qmbti65');
			$q66 = $this->input->post('qmbti66');
			$q67 = $this->input->post('qmbti67');
			$q68 = $this->input->post('qmbti68');
			$q69 = $this->input->post('qmbti69');
			$q70 = $this->input->post('qmbti70');

			$col1 = $q1+$q8+$q15+$q22+$q29+$q36+$q43+$q50+$q57+$q64;
			$col2 = $q2+$q9+$q16+$q23+$q30+$q37+$q44+$q51+$q58+$q65+$q3+$q10+$q17+$q24+$q31+$q38+$q45+$q52+$q59+$q66;
			$col3 = $q4+$q11+$q18+$q25+$q32+$q39+$q46+$q53+$q60+$q67+$q5+$q12+$q19+$q26+$q33+$q40+$q47+$q54+$q61+$q68;
			$col4 = $q6+$q13+$q20+$q27+$q34+$q41+$q48+$q55+$q62+$q69+$q7+$q14+$q21+$q28+$q35+$q42+$q49+$q56+$q63+$q70;

			if ($col1 < 0 and $col2 < 0 and $col3 < 0 and $col4 < 0) $result = 'ESTJ';
			if ($col1 < 0 and $col2 < 0 and $col3 < 0 and $col4 > 0) $result = 'ESTP';
			if ($col1 < 0 and $col2 < 0 and $col3 > 0 and $col4 < 0) $result = 'ESFJ';
			if ($col1 < 0 and $col2 < 0 and $col3 > 0 and $col4 > 0) $result = 'ESFP';
			if ($col1 < 0 and $col2 > 0 and $col3 < 0 and $col4 < 0) $result = 'ENTJ';
			if ($col1 < 0 and $col2 > 0 and $col3 < 0 and $col4 > 0) $result = 'ENTP';
			if ($col1 < 0 and $col2 > 0 and $col3 > 0 and $col4 < 0) $result = 'ENFJ';
			if ($col1 < 0 and $col2 > 0 and $col3 > 0 and $col4 > 0) $result = 'ENFP';
			if ($col1 > 0 and $col2 < 0 and $col3 < 0 and $col4 < 0) $result = 'ISTJ';
			if ($col1 > 0 and $col2 < 0 and $col3 < 0 and $col4 > 0) $result = 'ISTP';
			if ($col1 > 0 and $col2 < 0 and $col3 > 0 and $col4 < 0) $result = 'ISFJ';
			if ($col1 > 0 and $col2 < 0 and $col3 > 0 and $col4 > 0) $result = 'ISFP';
			if ($col1 > 0 and $col2 > 0 and $col3 < 0 and $col4 < 0) $result = 'INTJ';
			if ($col1 > 0 and $col2 > 0 and $col3 < 0 and $col4 > 0) $result = 'INTP';
			if ($col1 > 0 and $col2 > 0 and $col3 > 0 and $col4 < 0) $result = 'INFJ';
			if ($col1 > 0 and $col2 > 0 and $col3 > 0 and $col4 > 0) $result = 'INFP';

			if ($col1 == 0 and $col2 < 0 and $col3 < 0 and $col4 < 0) $result = 'ESTJ ISTJ';
			if ($col1 == 0 and $col2 < 0 and $col3 < 0 and $col4 > 0) $result = 'ESTP ISTP';
			if ($col1 == 0 and $col2 < 0 and $col3 > 0 and $col4 < 0) $result = 'ESFJ ISFJ';
			if ($col1 == 0 and $col2 < 0 and $col3 > 0 and $col4 > 0) $result = 'ESFP ISFP';
			if ($col1 == 0 and $col2 > 0 and $col3 < 0 and $col4 < 0) $result = 'ENTJ INTJ';
			if ($col1 == 0 and $col2 > 0 and $col3 < 0 and $col4 > 0) $result = 'ENTP INTP';
			if ($col1 == 0 and $col2 > 0 and $col3 > 0 and $col4 < 0) $result = 'ENFJ INFJ';
			if ($col1 == 0 and $col2 > 0 and $col3 > 0 and $col4 > 0) $result = 'ENFP INFP';

			if ($col1 > 0 and $col2 == 0 and $col3 < 0 and $col4 < 0) $result = 'ESTJ ENTJ';
			if ($col1 > 0 and $col2 == 0 and $col3 < 0 and $col4 > 0) $result = 'ESTP ENTP';
			if ($col1 > 0 and $col2 == 0 and $col3 > 0 and $col4 < 0) $result = 'ESFJ ENFJ';
			if ($col1 > 0 and $col2 == 0 and $col3 > 0 and $col4 > 0) $result = 'ESFP ENFP';
			if ($col1 < 0 and $col2 == 0 and $col3 < 0 and $col4 < 0) $result = 'ISTJ INTJ';
			if ($col1 < 0 and $col2 == 0 and $col3 < 0 and $col4 > 0) $result = 'ISTP INTP';
			if ($col1 < 0 and $col2 == 0 and $col3 > 0 and $col4 < 0) $result = 'ISFJ INFJ';
			if ($col1 < 0 and $col2 == 0 and $col3 > 0 and $col4 > 0) $result = 'ISFP INFP';

			if ($col1 > 0 and $col2 < 0 and $col3 == 0 and $col4 < 0) $result = 'ESTJ ESFJ';
			if ($col1 > 0 and $col2 < 0 and $col3 == 0 and $col4 > 0) $result = 'ESTP ESFP';
			if ($col1 > 0 and $col2 > 0 and $col3 == 0 and $col4 < 0) $result = 'ENTJ ENFJ';
			if ($col1 > 0 and $col2 > 0 and $col3 == 0 and $col4 > 0) $result = 'ENTP ENFP';
			if ($col1 < 0 and $col2 < 0 and $col3 == 0 and $col4 < 0) $result = 'ISTJ ISFJ';
			if ($col1 < 0 and $col2 < 0 and $col3 == 0 and $col4 > 0) $result = 'ISTP ISFP';
			if ($col1 < 0 and $col2 > 0 and $col3 == 0 and $col4 < 0) $result = 'INTJ INFJ';
			if ($col1 < 0 and $col2 > 0 and $col3 == 0 and $col4 > 0) $result = 'INTP INFP';

			if ($col1 > 0 and $col2 < 0 and $col3 < 0 and $col4 == 0) $result = 'ESTJ ESTP';
			if ($col1 > 0 and $col2 < 0 and $col3 > 0 and $col4 == 0) $result = 'ESFJ ESFP';
			if ($col1 > 0 and $col2 > 0 and $col3 < 0 and $col4 == 0) $result = 'ENTJ ENTP';
			if ($col1 > 0 and $col2 > 0 and $col3 > 0 and $col4 == 0) $result = 'ENFJ ENFP';
			if ($col1 < 0 and $col2 < 0 and $col3 < 0 and $col4 == 0) $result = 'ISTJ ISTP';
			if ($col1 < 0 and $col2 < 0 and $col3 > 0 and $col4 == 0) $result = 'ISFJ ISFP';
			if ($col1 < 0 and $col2 > 0 and $col3 < 0 and $col4 == 0) $result = 'INTJ INTP';
			if ($col1 < 0 and $col2 > 0 and $col3 > 0 and $col4 == 0) $result = 'INFJ INFP';

			if ($col1 == 0 and $col2 == 0 and $col3 < 0 and $col4 < 0) $result = 'ESTJ ENTJ ISTJ INTJ';
			if ($col1 == 0 and $col2 == 0 and $col3 < 0 and $col4 > 0) $result = 'ESTP ENTP ISTP INTP';
			if ($col1 == 0 and $col2 == 0 and $col3 > 0 and $col4 < 0) $result = 'ESFJ ENFJ ISFJ INFJ';
			if ($col1 == 0 and $col2 == 0 and $col3 > 0 and $col4 > 0) $result = 'ESFP ENFP ISFP INFP';

			if ($col1 == 0 and $col2 < 0 and $col3 == 0 and $col4 < 0) $result = 'ESTJ ESFJ ISTJ ISFJ';
			if ($col1 == 0 and $col2 < 0 and $col3 == 0 and $col4 > 0) $result = 'ESTP ESFP ISTP ISFP';
			if ($col1 == 0 and $col2 > 0 and $col3 == 0 and $col4 < 0) $result = 'ENTJ ENFJ INTJ INFJ';
			if ($col1 == 0 and $col2 > 0 and $col3 == 0 and $col4 > 0) $result = 'ENTP ENFP INTP INFP';

			if ($col1 == 0 and $col2 < 0 and $col3 < 0 and $col4 == 0) $result = 'ESTJ ESTP ISTJ ISTP';
			if ($col1 == 0 and $col2 < 0 and $col3 < 0 and $col4 == 0) $result = 'ESFJ ESFP ISFJ ISFP';
			if ($col1 == 0 and $col2 > 0 and $col3 > 0 and $col4 == 0) $result = 'ENTJ ENTP INTJ INTP';
			if ($col1 == 0 and $col2 > 0 and $col3 > 0 and $col4 == 0) $result = 'ENFJ ENFP INFJ INFP';

			if ($col1 < 0 and $col2 == 0 and $col3 == 0 and $col4 < 0) $result = 'ESTJ ESFJ ENTJ ENFJ';
			if ($col1 < 0 and $col2 == 0 and $col3 == 0 and $col4 > 0) $result = 'ESTP ESFP ENTP ENFP';
			if ($col1 > 0 and $col2 == 0 and $col3 == 0 and $col4 < 0) $result = 'ISTJ ISFJ INTJ INFJ';
			if ($col1 > 0 and $col2 == 0 and $col3 == 0 and $col4 > 0) $result = 'ISTP ISFP INTP INFP';

			if ($col1 < 0 and $col2 == 0 and $col3 < 0 and $col4 == 0) $result = 'ESTJ ESTP ENTJ ENTP';
			if ($col1 < 0 and $col2 == 0 and $col3 > 0 and $col4 == 0) $result = 'ESFJ ESFP ENFJ ENFP';
			if ($col1 > 0 and $col2 == 0 and $col3 < 0 and $col4 == 0) $result = 'ISTJ ISTP INTJ INTP';
			if ($col1 > 0 and $col2 == 0 and $col3 > 0 and $col4 == 0) $result = 'ISFJ ISFP INFJ INFP';

			if ($col1 < 0 and $col2 < 0 and $col3 == 0 and $col4 == 0) $result = 'ESTJ ESTP ESFJ ESFP';
			if ($col1 < 0 and $col2 > 0 and $col3 == 0 and $col4 == 0) $result = 'ENTJ ENTP ENFJ ENFP';
			if ($col1 > 0 and $col2 < 0 and $col3 == 0 and $col4 == 0) $result = 'ISTJ ISTP ISFJ ISFP';
			if ($col1 > 0 and $col2 > 0 and $col3 == 0 and $col4 == 0) $result = 'INTJ INTP INFJ INFP';

			if ($col1 == 0 and $col2 == 0 and $col3 == 0 and $col4 < 0) $result = 'ESTJ ESFJ ENTJ ENFJ ISTJ ISFJ INTJ INFJ';
			if ($col1 == 0 and $col2 == 0 and $col3 == 0 and $col4 > 0) $result = 'ESTP ESFP ENTP ENFP ISTP ISFP INTP INFP';
			if ($col1 == 0 and $col2 == 0 and $col3 < 0 and $col4 == 0) $result = 'ESTJ ESTP ENTJ ENTP ISTJ ISTP INTJ INTP';
			if ($col1 == 0 and $col2 == 0 and $col3 > 0 and $col4 == 0) $result = 'ESFJ ESFP ENFJ ENFP ISFJ ISFP INFJ INFP';
			if ($col1 == 0 and $col2 < 0 and $col3 == 0 and $col4 == 0) $result = 'ESTJ ESTP ESFJ ESFP ISTJ ISTP ISFJ ISFP';
			if ($col1 == 0 and $col2 > 0 and $col3 == 0 and $col4 == 0) $result = 'ENTJ ENTP ENFJ ENFP INTJ INTP INFJ INFP';
			if ($col1 < 0 and $col2 == 0 and $col3 == 0 and $col4 == 0) $result = 'ESTJ ESTP ESFJ ESFP ENTJ ENTP ENFJ ENFP';
			if ($col1 > 0 and $col2 == 0 and $col3 == 0 and $col4 == 0) $result = 'ISTJ ISTP ISFJ ISFP INTJ INTP INFJ INFP';

			if ($col1 == 0 and $col2 == 0 and $col3 == 0 and $col4 == 0) $result = 'ESTJ ESTP ESFJ ESFP ENTJ ENTP ENFJ ENFP ISTJ ISTP ISFJ ISFP INTJ INTP INFJ INFP';

			$id = $this->session->userdata('mbti_id');
			$date = mdate("%Y-%m-%d");
			$stat = 'COMPLETE';

			$data = array(
				'mbti_date' => $date,
				'mbti_status' => $stat,
				'mbti_result' => $result,
				'mbti_q1' => $q1,
				'mbti_q2' => $q2,
				'mbti_q3' => $q3,
				'mbti_q4' => $q4,
				'mbti_q5' => $q5,
				'mbti_q6' => $q6,
				'mbti_q7' => $q7,
				'mbti_q8' => $q8,
				'mbti_q9' => $q9,
				'mbti_q10' => $q10,
				'mbti_q11' => $q11,
				'mbti_q12' => $q12,
				'mbti_q13' => $q13,
				'mbti_q14' => $q14,
				'mbti_q15' => $q15,
				'mbti_q16' => $q16,
				'mbti_q17' => $q17,
				'mbti_q18' => $q18,
				'mbti_q19' => $q19,
				'mbti_q20' => $q20,
				'mbti_q21' => $q21,
				'mbti_q22' => $q22,
				'mbti_q23' => $q23,
				'mbti_q24' => $q24,
				'mbti_q25' => $q25,
				'mbti_q26' => $q26,
				'mbti_q27' => $q27,
				'mbti_q28' => $q28,
				'mbti_q29' => $q29,
				'mbti_q30' => $q30,
				'mbti_q31' => $q31,
				'mbti_q32' => $q32,
				'mbti_q33' => $q33,
				'mbti_q34' => $q34,
				'mbti_q35' => $q35,
				'mbti_q36' => $q36,
				'mbti_q37' => $q37,
				'mbti_q38' => $q38,
				'mbti_q39' => $q39,
				'mbti_q40' => $q40,
				'mbti_q41' => $q41,
				'mbti_q42' => $q42,
				'mbti_q43' => $q43,
				'mbti_q44' => $q44,
				'mbti_q45' => $q45,
				'mbti_q46' => $q46,
				'mbti_q47' => $q47,
				'mbti_q48' => $q48,
				'mbti_q49' => $q49,
				'mbti_q50' => $q50,
				'mbti_q51' => $q51,
				'mbti_q52' => $q52,
				'mbti_q53' => $q53,
				'mbti_q54' => $q54,
				'mbti_q55' => $q55,
				'mbti_q56' => $q56,
				'mbti_q57' => $q57,
				'mbti_q58' => $q58,
				'mbti_q59' => $q59,
				'mbti_q60' => $q60,
				'mbti_q61' => $q61,
				'mbti_q62' => $q62,
				'mbti_q63' => $q63,
				'mbti_q64' => $q64,
				'mbti_q65' => $q65,
				'mbti_q66' => $q66,
				'mbti_q67' => $q67,
				'mbti_q68' => $q68,
				'mbti_q69' => $q69,
				'mbti_q70' => $q70
			);
			$this->test_model->update_mbti($id,$data);
			$this->session->unset_userdata('mbti_id');
			$this->session->set_userdata('test','test');
			if($this->session->userdata('user_role') == 'CLIENT'){
				redirect('client/dashboard');
			}else{
				redirect('counselor/dashboard');
			}
		}

}
