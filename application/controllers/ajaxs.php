<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxs extends CI_Controller {


	public function get_project_details($value)
	{
		$data['details'] = $this->ajax_model->project_details($value); 
		$this->load->view('pages/project_details', $data);
	}

	public function get_intern_details($value)
	{
		
		$data['details'] = $this->ajax_model->intern_details($value); 
		$this->load->view('pages/intern_details', $data);
	}
	
}