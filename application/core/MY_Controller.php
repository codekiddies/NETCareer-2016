<?php

class MY_Controller extends CI_Controller {

	// Application Information
	public $app_title = "Digital Signage";
	public $app_footer = "codekiddies a.k.a @imankambing";

	public function __construct() {

		parent::__construct();

		$this->app_title = $this->config->item('app_title');
		$this->app_footer = $this->config->item('app_footer');

		if( $this->config->item('profiler_is_enabled') == TRUE) { $this->output->enable_profiler( TRUE ); }
	}

	public function credit() {

		return $this->app_title . br() . $this->app_footer;
	}

	public function index() {

		echo $this->credit();
	}

	public function check_isvalidated($required_role) {

		// Fungsi untuk memvalidasi user yang melakukan login
		if( ! $this->session->userdata("validated") || $required_role != $this->session->userdata("role_name")) {

			redirect('login/role/' . $this->session->userdata("role_name"));
		}
	}


}


/* End of file MY_Controller.php */

/* Location: ./application/core/MY_Controller.php */