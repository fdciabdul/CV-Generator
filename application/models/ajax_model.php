<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_model extends CI_Model{

	//AJAX

	public function project_details($value)
	{
		$arr = explode('7', $value);
		
		$p_name = str_replace('_',' ', $arr[0]);
		$userid = $arr[1];
		
		$query = $this->db->get_where('projects',array('userid'=>$userid, 'p_name'=>$p_name));
		
		return $query->result_array();
	}

	public function intern_details($value)
	{
		$arr = explode('7', $value);
		
		$i_name = str_replace('_',' ', $arr[0]);
		$userid = $arr[1];
		
		$query = $this->db->get_where('internships',array('userid'=>$userid, 'i_name'=>$i_name));
		
		return $query->result_array();
	}

}