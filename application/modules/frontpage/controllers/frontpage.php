<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('frontpage_md');
		
	}

	public function index() {

		$this->frontpage();
	}

	public function frontpage($notif=NULL) {

		$data['header'] = "Work at Netmedia";

		//panggil fungsi hitung row u/ tabel quotes
		$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

		//get max value dr jml row u/ dipakai funsgi rand()
		$max = $get_total_row->count_qt;
		$rand_id = rand(1, $max);
		$data['show_rand_quotes'] = $this->frontpage_md->get_random_quotes($rand_id)->row();
		

		$this->load->view('front_view',$data);

	}

	public function auth() {

		$this->load->helper('captcha');

		$data['header'] = "Work at Netmedia";

		//panggil fungsi hitung row u/ tabel quotes
		$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

		//get max value dr jml row u/ dipakai funsgi rand()
		$max = $get_total_row->count_qt;
		$rand_id = rand(1, $max);
		$data['show_rand_quotes'] = $this->frontpage_md->get_random_quotes($rand_id)->row();

		//CAPCAY
		//numeric random number for capcay
		$random_number = substr(number_format(time() * rand(),0,'',''),0,6);

		//setting up capcay config
		$vals = array(
			'word' => $random_number,
			'img_path' => './assets/capcay/',
			'img_url' => base_url() . 'assets/capcay/',
			'img_width' => 140,
			'img_height' => 32,
			'expiration' => 1800,
		);

		$data['capcay'] = create_captcha($vals);
		$this->session->set_userdata('capcayWord', $data['capcay']['word']);
		

		$this->load->view('front_login_view',$data);

	}

	public function login_process() {

		$data['header'] = "Work at Netmedia";

		//panggil fungsi hitung row u/ tabel quotes
		$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

		//get max value dr jml row u/ dipakai funsgi rand()
		$max = $get_total_row->count_qt;
		$rand_id = rand(1, $max);
		$data['show_rand_quotes'] = $this->frontpage_md->get_random_quotes($rand_id)->row();

		$config = array(
			array(
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'trim|required|valid_email|xss_clean'
			),
			array(
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'trim|required|xss_clean'
			)
		);

		$this->form_validation->set_rules($config);

		$this->form_validation->set_message('required', 'Please fill your email or password.');
		$this->form_validation->set_message('valid_email', 'Invalid email address.');
		$this->form_validation->set_message('matches', "Password didn't match.");

		if($this->form_validation->run() == FALSE) {

			if(isset($this->session->userdata['logged_in'])) {

				//$this->load->view('admin_page');
				redirect('memberpage');

			} else {

				$this->load->view('front_login_view',$data);
			}

		} else {

			$password = $this->input->post('password');

			$data = array(
				'email' => $this->input->post('email')
			);

			$pwd_db = $this->frontpage_md->get_pwd_db($data);

			//check input password with password stored on DB, if true go on (set session data, set userdata, redirect to member page) else if false go to login form with error notif 'Invalid email or password'
			if($this->bcrypt->check_password($password, $pwd_db->password) == TRUE) {

				$email = $this->input->post('email');
				$result = $this->frontpage_md->read_user_information($email);

				if($result != FALSE) {

					$session_data = array(
						'email'=>$result[0]->email,
						'first_name'=>$result[0]->first_name,
						'last_name'=>$result[0]->last_name
					);

					//add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					redirect('memberpage');
				}
			} else {

				//panggil fungsi hitung row u/ tabel quotes
				$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

				//get max value dr jml row u/ dipakai funsgi rand()
				$max = $get_total_row->count_qt;
				$rand_id = rand(1, $max);
				$show_rand_quotes = $this->frontpage_md->get_random_quotes($rand_id)->row();

				$data = array(
					'header' => 'Work at Netmedia',
					'show_rand_quotes' => $show_rand_quotes,
					'error_msg' => 'Invalid email or password.'
				);

				$this->load->view('front_login_view',$data);
			}

			//echo "<h1>Login Successfully!</h1>";
			//echo "<br/>";
			//echo "<p>post email: ". $data['email'] . "</p>";;
			//echo "<br/>";
			//echo "<p>post password: ". $data['password'] . "</p>";
			//echo "<br/>";

			/*if($this->bcrypt->check_password($password, $data['password']) == FALSE) {

				echo "Password NOT match!<br/>";

			} else { echo "Password match!<br/>"; }*/

			//echo "<a href='". base_url() ."'>Back to Home</a>";


		}

	}

	//logout from member page
	public function logout() {

		//panggil fungsi hitung row u/ tabel quotes
		$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

		//get max value dr jml row u/ dipakai funsgi rand()
		$max = $get_total_row->count_qt;
		$rand_id = rand(1, $max);

		//removing session data
		$sess_array = array(
			'email' => ''
		);

		//just clear some item at session, not all
		$this->session->unset_userdata('logged_in',$sess_array);

		//clear current session
		//$this->session->sess_destroy();

		$data = array(
			'header' => 'Work at Netmedia',
			'show_rand_quotes' => $this->frontpage_md->get_random_quotes($rand_id)->row(),
			'logout_notif' => 'Successfully logout'
		);

		$this->load->view('front_login_view',$data);
	}

	public function register_process() {

		$this->load->helper('captcha');

		$data['header'] = "Work at Netmedia";

		//panggil fungsi hitung row u/ tabel quotes
		$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

		//get max value dr jml row u/ dipakai funsgi rand()
		$max = $get_total_row->count_qt;
		$rand_id = rand(1, $max);
		$data['show_rand_quotes'] = $this->frontpage_md->get_random_quotes($rand_id)->row();

		$config = array(
			array(
				'field'=>'fname',
				'label'=>'First Name',
				'rules'=>'trim|required|xss_clean'
			),
			array(
				'field'=>'lname',
				'label'=>'Last Name',
				'rules'=>'trim|required|xss_clean'
			),
			array(
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'trim|required|valid_email|xss_clean'
			),
			array(
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'trim|required|matches[repassword]|xss_clean'
			),
			array(
				'field'=>'repassword',
				'label'=>'Retype Password',
				'rules'=>'trim|required|xss_clean'
			),
			array(
				'field'=>'capcay',
				'label'=>'Captcha',
				'rules'=>'required|callback_check_captcha'
			)
		);

		$this->form_validation->set_rules($config);

		//$this->form_validation->set_message('required', 'required field.');
		$this->form_validation->set_message('valid_email', 'Invalid email address.');
		$this->form_validation->set_message('matches', "Password didn't match.");
		$this->form_validation->set_message('check_captcha', "Captcha didn't match.");

		//CAPCAY
		$userCapcay = $this->input->post('capcay');

		if($this->form_validation->run() == FALSE) {

			//CAPCAY START----------------------------------------------------------
			//numeric random number for capcay
			$random_number = substr(number_format(time() * rand(),0,'',''),0,6);

			//setting up capcay config
			$vals = array(
				'word' => $random_number,
				'img_path' => './assets/capcay/',
				'img_url' => base_url() . 'assets/capcay/',
				'img_width' => 140,
				'img_height' => 32,
				'expiration' => 1800,
			);

			$data['capcay'] = create_captcha($vals);

			$this->session->set_userdata('capcayWord', $data['capcay']['word']);
			//CAPCAY END-------------------------------------------------------------

			//error show up in front_register_view
			$this->load->view('front_register_view',$data);

		} else {

			$password = $this->input->post('password');

			$data = array(
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'password' => $this->bcrypt->hash_password($password)
			);

			$result = $this->frontpage_md->registration_insert($data);

			if($result == FALSE) {

				//panggil fungsi hitung row u/ tabel quotes
				$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

				//get max value dr jml row u/ dipakai funsgi rand()
				$max = $get_total_row->count_qt;
				$rand_id = rand(1, $max);

				$data = array(
					'header' => 'Work at Netmedia',
					'show_rand_quotes' => $this->frontpage_md->get_random_quotes($rand_id)->row(),
					'reg_err' => 'Registration Failed, email already exist!'
				);

				//CAPCAY START----------------------------------------------------------
				//numeric random number for capcay
				$random_number = substr(number_format(time() * rand(),0,'',''),0,6);

				//setting up capcay config
				$vals = array(
					'word' => $random_number,
					'img_path' => './assets/capcay/',
					'img_url' => base_url() . 'assets/capcay/',
					'img_width' => 140,
					'img_height' => 32,
					'expiration' => 1800,
				);

				$data['capcay'] = create_captcha($vals);

				$this->session->set_userdata('capcayWord', $data['capcay']['word']);
				//CAPCAY END-------------------------------------------------------------

				$this->load->view('front_register_view',$data);
			} else {

				$data['reg_success'] = 'Registration Successfully!';

				$data['header'] = "Work at Netmedia";

				//panggil fungsi hitung row u/ tabel quotes
				$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

				//get max value dr jml row u/ dipakai funsgi rand()
				$max = $get_total_row->count_qt;
				$rand_id = rand(1, $max);
				$data['show_rand_quotes'] = $this->frontpage_md->get_random_quotes($rand_id)->row();

				$this->load->view('front_login_view',$data);
			}

			//INFO
			//echo "<h1>Register Successfully!</h1>";
			//echo "<br/>";
			//echo "<p>post email: ". $data['email'] . "</p>";;
			//echo "<br/>";
			//echo "<p>post password: ". $data['password'] . "</p>";
			//echo "<br/>";

			//check password match
			/*if($this->bcrypt->check_password($password, $data['password']) == FALSE) {

				echo "Password NOT match!<br/>";

			} else { echo "Password match!<br/>"; } */

			//insert $data to table cr_member_2
			/*if($this->db->insert('cr_member_2',$data) == FALSE) {

				echo "Insert to database FAILED.<br/><br/>";

			} else { 

				echo "insert to database SUCCESS.<br/><br/>"; 

				$data['reg_notif'] = 'Registration Successfully!';

				$this->load->view('front_view', $data);

			}*/

			//back to home button
			//echo "<a href='". base_url() ."'>Back to Home</a>";


		}

	}

	//CAPTCHA FUNCTION, AS A REFERENCE ONLY (NOT USED)
	/*public function capcay() {

		$this->load->helper('captcha');

		$this->form_validation->set_rules('capcay', 'Captcha', 'required|callback_check_captcha');
		$userCapcay = $this->input->post('capcay');

		if($this->form_validation->run() == FALSE) {
			//numeric random number for capcay
			$random_number = substr(number_format(time() * rand(),0,'',''),0,6);

			//setting up capcay config
			$vals = array(
				'word' => $random_number,
				'img_path' => './assets/capcay/',
				'img_url' => base_url() . 'assets/capcay/',
				'img_width' => 140,
				'img_height' => 32,
				'expiration' => 1800,
			);

			$data['capcay'] = create_captcha($vals);
			$this->session->set_userdata('capcayWord', $data['capcay']['word']);

			$this->load->view('front_register_view',$data);
		} else {
			//do your stuff here
			echo "I'm here cleared all validation";
		}
	} */

	//fungsi callback check captcha match antara yg di input user di form register dengan yang tersimpan di session capcayWord
	public function check_captcha($str) {

		$word = $this->session->userdata('capcayWord');

		if(strcmp(strtoupper($str), strtoupper($word)) == 0) {

			return true;

		} else {

			$data['header'] = "Work at Netmedia";

			//panggil fungsi hitung row u/ tabel quotes
			$get_total_row = $this->frontpage_md->get_qt_total_row()->row();

			//get max value dr jml row u/ dipakai funsgi rand()
			$max = $get_total_row->count_qt;
			$rand_id = rand(1, $max);
			$data['show_rand_quotes'] = $this->frontpage_md->get_random_quotes($rand_id)->row();

			//CAPCAY
			//numeric random number for capcay
			$random_number = substr(number_format(time() * rand(),0,'',''),0,6);

			//setting up capcay config
			$vals = array(
				'word' => $random_number,
				'img_path' => './assets/capcay/',
				'img_url' => base_url() . 'assets/capcay/',
				'img_width' => 140,
				'img_height' => 32,
				'expiration' => 1800,
			);

			$data['capcay'] = create_captcha($vals);
			$this->session->set_userdata('capcayWord', $data['capcay']['word']);

			//$this->form_validation->set_message('check_captcha', 'Please enter correct words!');
			$data['capcay_err'] = 'Wrong code, please enter the right code.';
			return false;

		}
	}

}

/* End of file frontpage.php */
/* Location: ./application/modules/frontpage/controllers/frontpage.php */