<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displays extends CI_Controller {

	public function show_data()
	{
		$data['title'] = 'View CV';
		$this->form_validation->set_rules('userid', 'User ID', 'callback_user_check');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('pages/show', $data);
			$this->load->view('templates/footer');		

		}else{
			$userid = $this->input->post('userid');
			$data['education'] = $this->page_model->get_data($userid,'education');
			$data['email'] = $this->page_model->get_data($userid,'email');
			$data['internships'] = $this->page_model->get_data($userid,'internship');
			$data['online'] = $this->page_model->get_data($userid,'online');
			$data['phone'] = $this->page_model->get_data($userid,'phone');
			$data['projects'] = $this->page_model->get_data($userid,'project');
			$data['skills'] = $this->page_model->get_data($userid,'skill');
			$data['users'] = $this->page_model->get_data($userid,'user');
			$data['profile_pic'] = $this->page_model->get_data($userid,'profile_pic');
		
			$this->load->view('templates/header', $data);
			$this->load->view('pages/display', $data);
			$this->load->view('templates/footer');

		}

	}

	public function user_check($userid)
	{
		$check = $this->page_model->get_user($userid);
		if($check === FALSE){
			$this->form_validation->set_message('user_check', 'The User ID does not exist');
		}
		return $check;
	}
		
}