<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memberpage_md extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	
	public function get_posisi_baru($divisi) {

		//connect to career_new DB
		$career_new_db = $this->load->database('career_new', TRUE);

		$query = "SELECT * FROM posisi_baru WHERE divisi = $divisi AND status = 1";

		return $career_new_db->query($query)->result();

	}

	public function get_pengumuman() {

		$career_new_db = $this->load->database('career_new', TRUE);

		$query = "SELECT * FROM berita ORDER BY id DESC, tanggal ASC LIMIT 1000";

		return $career_new_db->query($query)->result();
	}

	public function get_berita_isi($id) {

		$career_new_db = $this->load->database('career_new', TRUE);

		$query = "SELECT * FROM berita WHERE id = $id LIMIT 1";

		return $career_new_db->query($query)->row();
	}

}