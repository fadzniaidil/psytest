<?php 
	defined('BASEPATH') OR exit('No direct script allowed');

	class Test_model extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function update_gad($id,$data){
			$this->db->set($data);
			$this->db->where('gad_id',$id);
			return $this->db->update('test_gad',$data);
		}
		
		function update_phq($id,$data){
			$this->db->set($data);
			$this->db->where('phq_id',$id);
			return $this->db->update('test_phq',$data);
		}

		function update_whooley($id,$data){
			$this->db->set($data);
			$this->db->where('whooley_id',$id);
			return $this->db->update('test_whooley',$data);
		}

		function update_dass($id,$data){
			$this->db->set($data);
			$this->db->where('dass_id',$id);
			return $this->db->update('test_dass',$data);
		}

		function update_bai($id,$data){
			$this->db->set($data);
			$this->db->where('bai_id',$id);
			return $this->db->update('test_bai',$data);
		}

		function update_bdi($id,$data){
			$this->db->set($data);
			$this->db->where('bdi_id',$id);
			return $this->db->update('test_bdi',$data);
		}

		function update_mbti($id,$data){
			$this->db->set($data);
			$this->db->where('mbti_id',$id);
			return $this->db->update('test_mbti ',$data);
		}
	}
?>