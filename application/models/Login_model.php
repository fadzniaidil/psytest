<?php 
	defined('BASEPATH') OR exit('No direct script allowed');

	class Login_model extends CI_Model{

		function __construct() 
		{
	        parent::__construct();
	    }

		function check_user($user,$pass){
			$this->db->select('login_user,login_password');
			$this->db->from('login');
			$this->db->where('login_user', $user);
			$this->db->where('login_password', $pass);
			$query = $this->db->get();

			return $query->num_rows();
		}

		function check_roles($user){
			$this->db->select('login_role');
			$this->db->from('login');
			$this->db->where('login_user', $user);
			
			return $query = $this->db->get()->row();
		}
	}
?>
