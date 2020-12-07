<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validates extends CI_Controller {

	public function validate($flag = 'create')
	{
		
		$this->form_validation->set_rules('fname', 'First Name', 'required|trim|alpha');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|trim|alpha');

		$this->form_validation->set_rules('phone1', 'Phone Number 1', 'trim|required|is_numeric|exact_length[10]');
		$this->form_validation->set_rules('phone2', 'Phone Number 2', 'trim|is_numeric|exact_length[10]|differs[phone1]');
		
		$this->form_validation->set_rules('email1', 'Email ID 1', 'trim|required|valid_email');
		$this->form_validation->set_rules('email2', 'Email ID 2', 'trim|valid_email|differs[email1]');

		$this->form_validation->set_rules('gid', 'GitHub ID', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('lid', 'LinkedIn ID', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('hid', 'Hackerrank ID', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('tid', 'Twitter handel', 'trim|alpha_numeric');

		$this->form_validation->set_rules('street', 'Street', 'trim|required|regex_match[/^[a-z0-9A-Z .,\-]+$/i]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('state', 'State', 'trim|required|alpha');
		$this->form_validation->set_rules('pin', 'PIN Code', 'trim|required|is_numeric|exact_length[6]');

		$this->form_validation->set_rules('course', 'Course Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('institute', 'institute Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('start', 'Start Year', 'trim|required|exact_length[4]');
		$this->form_validation->set_rules('pass', 'Passing Year', 'trim|required|exact_length[4]');

		$this->form_validation->set_rules('level1', 'Beginner Skills', 'trim|required');
		$this->form_validation->set_rules('level2', 'Intermediate Skills', 'trim|required');
		$this->form_validation->set_rules('level3', 'Expert Skills', 'trim|required');

		$this->form_validation->set_rules('p_name', 'Project Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('p_sdate', 'Project Start date', 'required');
		$this->form_validation->set_rules('p_edate', 'Project Complition date', 'required');
		$this->form_validation->set_rules('p_description', 'Project Description', 'trim|required|regex_match[/^[a-zA-Z0-9 ,.@()""-]+$/i]');
		

		$this->form_validation->set_rules('i_name', 'Internship Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('i_sdate', 'Internship Start date', 'required');
		$this->form_validation->set_rules('i_edate', 'Internship Complition date', 'required');
		$this->form_validation->set_rules('i_description', 'Internship Description', 'trim|required|regex_match[/^[a-zA-Z0-9 ,.@()""-]+$/i]');

		$userid = trim($this->input->post('userid'));

		//image validation properties and load library 
		$config = [
				'upload_path' => './assets/uploads/',
				'allowed_types' => 'jpg|png|jpeg|gif',
				'max_size' => 2048,
				'file_name' => $userid,
				'overwrite' => TRUE
			];
		$this->load->library('upload', $config);
		
		///////////////

		if($flag == 'create')
		{
			$this->form_validation->set_rules('userid', 'User ID', 'required|is_unique[users.userid]');
			$data['title'] = 'Create CV';

			//image upload check
			if ( ! $this->upload->do_upload()) {
			    // something went wrong show error page
			    $data['upload_error'] = $this->upload->display_errors();
			}

			if(($this->form_validation->run() && $this->upload->do_upload()) === FALSE)
			{
				echo "<pre>";
				print_r (validation_errors());
				echo "</pre>";
				die();
				$this->load->view('templates/header', $data);
				$this->load->view('pages/create', $data);
				$this->load->view('templates/footer');		

			}else{

				$image_data = $this->upload->data();
				$image_path = base_url('assets/uploads/'.$image_data['raw_name'].$image_data['file_ext']);
				$this->page_model->upload_image($userid, $image_path);
				$this->page_model->create_cv();
				redirect('pages/home');
			}
		}
		// Update section
		else
		{
			$this->form_validation->set_rules('userid', 'User ID', 'required');
			$data['title'] = 'Update CV';
			
			//image update if uploaded
			$noProblem = TRUE;
			if(file_exists($_FILES['userfile']['tmp_name']) && is_uploaded_file($_FILES['userfile']['tmp_name'])) 
			{
				if ( ! $this->upload->do_upload()) {
				    // something went wrong show error page
				    $data['upload_error'] = $this->upload->display_errors();
				    $noProblem = FALSE;
				}
			}

			if(($this->form_validation->run() && $noProblem) === FALSE)
			{
				$data['education'] = array(
					array(
						'userid'=>$this->input->post('userid'),
						'course' => $this->input->post('course'),
						'start' => $this->input->post('start'),
						'pass' => $this->input->post('pass')
					)
				);

				$data['users'] = array(
					 array(
					'userid'=>$this->input->post('userid'),
					'gender' => $this->input->post('gender'),
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'street' => $this->input->post('street'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'pin' => $this->input->post('pin')
					)
				);

				$data['email'] = 
					 array(
					array(
					'userid'=>$this->input->post('userid'),
					'email_id'=>$this->input->post('email1')
					),
					array(
					'userid'=>$this->input->post('userid'),
					'email_id'=>$this->input->post('email2')
					)
					)
				;

				$data['phone'] = array(
					array(
					'userid'=>$this->input->post('userid'),
					'phone_no'=>$this->input->post('phone1')
					),
					array(
					'userid'=>$this->input->post('userid'),
					'phone_no'=>$this->input->post('phone2')
					)
				);


				$data['online'] = array(
					 array(
					'userid'=>$this->input->post('userid'),
					'gid' => $this->input->post('gid'),
					'lid' => $this->input->post('lid'),
					'hid' => $this->input->post('hid'),
					'tid' => $this->input->post('tid')
					)
				);


				$data['skills'] = array(
					array(
					'userid' => $this->input->post('userid'),
					'level1' => $this->input->post('level1'),
					'level2' => $this->input->post('level2'),
					'level3' => $this->input->post('level3')
					)
				);

				$data['projects'] = array(
					array(
					'userid'=>$this->input->post('userid'),
					'p_name' => $this->input->post('p_name'),
					'p_sdate' => $this->input->post('p_sdate'),
					'p_edate' => $this->input->post('p_edate'),
					'p_description' => $this->input->post('p_description')
					)
				);

				$data['internships'] = array(
					array(
					'userid'=>$this->input->post('userid'),
					'i_name' => $this->input->post('i_name'),
					'i_sdate' => $this->input->post('i_sdate'),
					'i_edate' => $this->input->post('i_edate'),
					'i_description' => $this->input->post('i_description'),
					)
				);
				$data['profile_pic'] = array( 
					array(
					'userid'=>$this->input->post('userid'),
					'userfile'=> $this->input->post('userfile')
					)
				);
			
				$this->load->view('templates/header', $data);
				$this->load->view('pages/update_form', $data);
				$this->load->view('templates/footer');		

			}else{

				if(file_exists($_FILES['userfile']['tmp_name']) && is_uploaded_file($_FILES['userfile']['tmp_name'])) 
				{
					$image_data = $this->upload->data();
					$image_path = base_url('assets/uploads/'.$image_data['raw_name'].$image_data['file_ext']);
					$this->page_model->upload_image($userid, $image_path);
				}
				
				$this->page_model->create_cv($userid);

				redirect('pages/home');
			}
		}
		
	}

}
