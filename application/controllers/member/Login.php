<?php
/**
 * Author: Amirul Momenin
 * Desc:Login Controller
 *
 */
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('Customlib');
		$this->load->helper(array('cookie', 'url')); 
		$this->load->database();  
		$this->load->model('Users_model');		
    } 
    /*
     * Login view of Login
     */
    function index($msg=''){
		$data['msg'] = $msg; 
		$data['email'] = ""; 
		$data['password'] = "";
        $data['_view'] = 'member/login/index';
        $this->load->view('layouts/member/login_body',$data);
    }
	/*
     * login_process of Login
     */
    function login_process(){
		// Load the model
        $this->load->model('Login_model');
        // Validate the user can login
        $result = $this->Login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to member area
            redirect('membercontroller');
        }
	}
	
	function register(){   
	    $data['msg'] = "";
        $data['_view'] = 'member/login/register';
        $this->load->view('layouts/member/login_body',$data);
    }
	
	function register_process(){
        $msg = "";
		$result = $this->db->get_where('users',array('email'=>$this->input->post('email')))->row_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		if($result['email'] == $this->input->post('email')){
		  $msg = '<font color=red>This email already has been used to register.</font><br />';
		}else{
			$params = array(
							'email' =>$this->input->post('email'),
							'password' =>$this->input->post('password'),
							'first_name' =>$this->input->post('first_name'),
							'last_name' =>$this->input->post('last_name'),
							'created_at' =>date("Y-m-d H:i:s"),
				      );
			$users_id = $this->Users_model->add_users($params);
			if($users_id){
				$msg = '<font color=green>Registration has been completed sucessfully.</font><br />';
			}
		}
		$data['msg'] = $msg; 
		$data['_view'] = 'member/login/';
        $this->load->view('layouts/member/login_body',$data);
    }
	
	
	public function do_logout(){
        $this->session->sess_destroy();
        redirect('member/login/index');
    }
}
