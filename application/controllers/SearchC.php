<?php 
	/**
	* 
	*/
	class SearchC extends CI_Controller
	{
		
		public function searchControl()
		{
			$user['vchr_user_fname']=$this->input->get_post('fname');
			$user['vchr_user_lname']=$this->input->get_post('lname');

			$this->load->model('SearchM');
			$result=$this->SearchM->searchModel($user);
			print_r($result);

		}
	}
 ?>