<?php 
	/**
	* 
	*/
	class SearchM extends CI_Model
	{
		
		public function searchModel($data)
		{
			#searchUser
			print_r($data);
			$query=$this->db->select('*')
							->from('tbl_user')
							->like('vchr_user_fname',$data['vchr_user_fname'],'before')
							#->or_like('vchr_user_lname',$data['vchr_user_lname'])
							->get();

			
				$details=$query->result_array();
				#print_r($details);
		}
	}
 ?>