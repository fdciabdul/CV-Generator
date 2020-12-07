<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Page_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_user($userid)
		{
			$this->db->where('userid', $userid);
			$num = $this->db->count_all_results('users');
			return $num>0?TRUE:FALSE;
		}

		public function get_data($userid, $table)
		{
			$query = $this->db->get_where($table, array('userid' => $userid));
			return $query->result_array();
		}


		public function upload_image($userid, $image_path = NULL){

			if($image_path === NULL){
				show_404();
			}else{
				
				$profile_pic = array(
					'userid'=> $userid,
					'image_path' => $image_path
				);
				if(!empty($this->get_data($userid , 'profile_pic'))){
					$this->db->replace('profile_pic', $profile_pic);
				}else{
					$this->db->insert('profile_pic', $profile_pic);
				}
			
			}
		}

		public function create_cv($userid = NULL){

			$education = array(

				'userid'=>$this->input->post('userid'),
				'course' => $this->input->post('course'),
				'start' => $this->input->post('start'),
				'pass' => $this->input->post('pass')
			);

			$users = array(

				'userid'=>$this->input->post('userid'),
				'gender' => $this->input->post('gender'),
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'street' => $this->input->post('street'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'pin' => $this->input->post('pin')
			);
			if($this->input->post('email2') != NULL){
				$email = array(
					array(
					'userid'=>$this->input->post('userid'),
					'email_id'=>$this->input->post('email1')
					),
					array(
					'userid'=>$this->input->post('userid'),
					'email'=>$this->input->post('email2')
					)
				);
			}else{
				$email = array(
					array(
					'userid'=>$this->input->post('userid'),
					'email'=>$this->input->post('email1')
					)
				);
			}

			if($this->input->post('phone2') != NULL){
					$phone = array(
						array(
						'userid'=>$this->input->post('userid'),
						'phone'=>$this->input->post('phone1')
						),
						array(
						'userid'=>$this->input->post('userid'),
						'phone'=>$this->input->post('phone2')
						)
					);
				}else{
					$phone = array(
						array(
						'userid'=>$this->input->post('userid'),
						'phone'=>$this->input->post('phone1')
						)
					);
				}
			


			$online = array(

				'userid'=>$this->input->post('userid'),
				'gid' => $this->input->post('gid'),
				'lid' => $this->input->post('lid'),
				'hid' => $this->input->post('hid'),
				'tid' => $this->input->post('tid')
			);


			$skills = array(

				'userid' => $this->input->post('userid'),
				'level1' => $this->input->post('level1'),
				'level2' => $this->input->post('level2'),
				'level3' => $this->input->post('level3')
			);

			$project = array(
				'userid'=>$this->input->post('userid'),
				'name' => $this->input->post('p_name'),
				'sdate' => $this->input->post('p_sdate'),
				'edate' => $this->input->post('p_edate'),
				'description' => $this->input->post('p_description')
			);

			$internship = array(
				'userid'=>$this->input->post('userid'),
				'name' => $this->input->post('i_name'),
				'sdate' => $this->input->post('i_sdate'),
				'edate' => $this->input->post('i_edate'),
				'description' => $this->input->post('i_description'),
			);

			if($userid === NULL){
				$this->db->insert('education', $education);
				$this->db->insert_batch('email', $email);
				$this->db->insert('internship', $internship);
				$this->db->insert('online', $online);
				$this->db->insert_batch('phone', $phone);
				$this->db->insert('project', $project);
				$this->db->insert('skill', $skills);		
				$this->db->insert('user', $users);
			}else{

				/*
					Adding new projects to database 
					Check for matching 
				*/
				$ps = $this->get_data($userid, 'project');
				
				foreach($ps as $p){
					$check = false;
					if($proct['p_name'] == $p['p_name'])
					{
						$this->db->delete('projects', array('userid' => $userid, 'p_name' => $p['p_name'])); 
						$this->db->insert('projects', $project);
						$check = TRUE;
						break;
					}
				}
				if($check === FALSE){
					$this->db->insert('projects', $project);
				}
				

				/*
					Adding new internship to database 
					Check for matching 
				*/
				$is = $this->get_data($userid, 'internships');
				foreach($is as $i){
					$check = false;
					if($internship['i_name'] == $i['i_name'])
					{
						$this->db->delete('internships', array('userid' => $userid, 'i_name' => $i['i_name'])); 
						$this->db->insert('internships', $internship);
						$check = TRUE;
						break;
					}
				}
				if($check === FALSE){
					$this->db->insert('internships', $internship);
				}
			

				$this->db->delete('education', array('userid' => $userid));
				$this->db->delete('email', array('userid' => $userid));  			
				$this->db->delete('online', array('userid' => $userid)); 
				$this->db->delete('phone', array('userid' => $userid)); 
				$this->db->delete('skills', array('userid' => $userid)); 
				$this->db->delete('users', array('userid' => $userid)); 	

				$this->db->insert('education', $education);
				$this->db->insert_batch('email', $email);			
				$this->db->insert('online', $online);
				$this->db->insert_batch('phone', $phone);			
				$this->db->insert('skills', $skills);				
				$this->db->insert('users', $users);
				
			}
		}

		
}