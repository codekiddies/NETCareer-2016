<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memberpage extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('memberpage_md');
		
	}

	public function index() {

		$this->memberpage();
	}

	public function memberpage() {

		$data['title'] = "Career at Net Mediatama Televisi";

		if(isset($this->session->userdata['logged_in'])) {
			$data['email'] = ($this->session->userdata['logged_in']['email']);
			$data['first_name'] = ($this->session->userdata['logged_in']['first_name']);
			$data['last_name'] = ($this->session->userdata['logged_in']['last_name']);
		} else { 
			header("Location: http://172.16.52.101/career2016/frontpage/login_process");
		}
		

		$this->load->view('member_home_alt', $data);

	}

	public function jobdesc() {

		$data['title'] = "Job Description | Career at Net Mediatama Televisi";

		if(isset($this->session->userdata['logged_in'])) {
			$data['email'] = ($this->session->userdata['logged_in']['email']);
			$data['first_name'] = ($this->session->userdata['logged_in']['first_name']);
			$data['last_name'] = ($this->session->userdata['logged_in']['last_name']);
		} else { 
			header("Location: http://172.16.52.101/career2016/frontpage/login_process");
		}
		
		$data['get_posisi_corplegal'] = $this->memberpage_md->get_posisi_baru(12);
		$data['get_posisi_corpservice'] = $this->memberpage_md->get_posisi_baru(9);
		$data['get_posisi_finance'] = $this->memberpage_md->get_posisi_baru(14);
		$data['get_posisi_news'] = $this->memberpage_md->get_posisi_baru(4);
		$data['get_posisi_production'] = $this->memberpage_md->get_posisi_baru(2);
		$data['get_posisi_programming'] = $this->memberpage_md->get_posisi_baru(1);
		$data['get_posisi_sales'] = $this->memberpage_md->get_posisi_baru(6);
		$data['get_posisi_services'] = $this->memberpage_md->get_posisi_baru(8);
		$data['get_posisi_tech'] = $this->memberpage_md->get_posisi_baru(7);

		$this->load->view('member_jobdesc', $data);

	}

	public function notice() {

		$data['title'] = "Notice Board | Career at Net Mediatama Televisi";

		if(isset($this->session->userdata['logged_in'])) {
			$data['email'] = ($this->session->userdata['logged_in']['email']);
			$data['first_name'] = ($this->session->userdata['logged_in']['first_name']);
			$data['last_name'] = ($this->session->userdata['logged_in']['last_name']);
		} else { 
			header("Location: http://172.16.52.101/career2016/frontpage/login_process");
		}

		$data['get_pengumuman'] = $this->memberpage_md->get_pengumuman();

		$this->load->library('pagination');

		$config['base_url'] = 'http://172.16.52.101/career2016/memberpage/notice';
		$config['total_rows'] = 1000;
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);

		$this->load->view('member_notice', $data);
	}

	public function notice_isi($id) {

		$data['title'] = "Notice Board | Career at Net Mediatama Televisi";

		if(isset($this->session->userdata['logged_in'])) {
			$data['email'] = ($this->session->userdata['logged_in']['email']);
			$data['first_name'] = ($this->session->userdata['logged_in']['first_name']);
			$data['last_name'] = ($this->session->userdata['logged_in']['last_name']);
		} else { 
			header("Location: http://172.16.52.101/career2016/frontpage/login_process");
		}

		$data['get_berita_isi'] = $this->memberpage_md->get_berita_isi($id);

		$this->load->view('member_notice_isi', $data);

	}

	public function pilih() {

		$data['title'] = "Daftar | Career at Net Mediatama Televisi";

		if(isset($this->session->userdata['logged_in'])) {
			$data['email'] = ($this->session->userdata['logged_in']['email']);
			$data['first_name'] = ($this->session->userdata['logged_in']['first_name']);
			$data['last_name'] = ($this->session->userdata['logged_in']['last_name']);
		} else { 
			header("Location: http://172.16.52.101/career2016/frontpage/login_process");
		}


		$this->load->view('member_pilih', $data);

	}

}

/* End of file frontpage.php */
/* Location: ./application/modules/frontpage/controllers/frontpage.php */