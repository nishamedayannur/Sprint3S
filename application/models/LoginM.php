<?php 
	/**
	* 
	*/
	class LoginM extends CI_Model
	{
		
		public function loginModel($data)
		{
			//echo "hai";
			#$falag=0;
			$query=$this->db->select('*')
							->from('tbl_user')
							->where($data)
							->get();
			#print_r($data);
			if ($query->num_rows()==1)
			{
				$details=$query->result_array();
				$this->load->library('session');
				#print_r($details);
				$json=array('ResponseCode'=>200,'Msg'=>'success','profilepic'=>$details[0]['vchr_user_profile_pic'],'Fname'=>$details[0]['vchr_user_fname'],'Lname'=>$details[0]['vchr_user_lname'],'Email'=>$details[0]['vchr_user_email']);
				#$this->session->set_userata('session_id',$user_id);
				return $json;

			}
			else
			{
				#print_r($data['vchr_user_email']);
				$query=$this->db->select('*')
								->from('tbl_user')
								->where('vchr_user_email',$data['vchr_user_email'])
								->get();
				#$details=$query->result_array();
				#print_r($details);
				if ($query->num_rows()==1)
				{
					$details=$query->result_array();
					#print_r($details);
					$json=array('ResponseCode'=>500,'Msg'=>'invalid password','profilepic'=>$details[0]['vchr_user_profile_pic'],'Fname'=>$details[0]['vchr_user_fname'],'Lname'=>$details[0]['vchr_user_lname'],'Email'=>$details[0]['vchr_user_email']);
					return $json;
				}
				else
				{
					$json=array('ResponseCode'=>404,'Msg'=>'invalid usernameand password');
					return $json;
				}
				
			}
		}
	}
 ?>