<?php 
	/**
	* 
	*/
	class LoginC extends CI_Controller
	{
		
		function loginControl()
		{
			$user['vchr_user_email']=$this->input->get_post('email');
			$user['vchr_user_password']=$this->input->get_post('password');
			#print_r($user);

			$this->load->model('LoginM');	
			$result=$this->LoginM->loginModel($user);
			echo json_encode($result);
			#print_r($result);
			///////session\\\\\\\\\
			$this->load->library('session');
			$session_data=$result;
			#print_r($session_data);
			$this->session->set_userdata($result);
			#echo $this->session->userdata('Fname');

		}

	}
 ?>