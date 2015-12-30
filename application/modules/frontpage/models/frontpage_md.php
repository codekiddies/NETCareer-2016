<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage_md extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	// Read data using username and password
	public function login($data) {

		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('password');
		$this->db->from('cr_member_2');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function get_pwd_db($data) {

		$query = "SELECT password FROM cr_member_2 WHERE email = '". $data['email'] ."' ";

		return $this->db->query($query)->row();

	}

	// Read data from database to show data in admin page
	public function read_user_information($email) {

		$condition = "email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('cr_member_2');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function registration_insert($data) {

		//query to check whether email already exist or not
		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('*');
		$this->db->from('cr_member_2');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 0) {

			//query to insert data in database
			$this->db->insert('cr_member_2',$data);
			if($this->db->affected_rows() > 0) {

				return true;
			}
		} else {

			return false;
		}
	}

	public function get_qt_total_row() {

		$query = "SELECT COUNT(qt_id) AS count_qt FROM cr_front_quotes WHERE qt_status=1 ";

		return $this->db->query($query);
	}

	public function get_random_quotes($qt_id) {

		$query = "SELECT * FROM cr_front_quotes WHERE qt_id = $qt_id ";

		return $this->db->query($query);

	}
	

}