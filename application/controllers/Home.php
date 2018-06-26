<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('nav/header');
		$this->load->view('nav/top_nav');
		$this->load->view('nav/side_nav');
		$this->load->view('nav/sub_header');

		$this->load->view('a_main/home');	
	}

	public function CreateMember()
	{
		$this->load->view('nav/header');
		$this->load->view('nav/top_nav');
		$this->load->view('nav/side_nav');
		$this->load->view('nav/sub_header');
		$this->load->view('a_main/create_member');		
	}

	function submitMember()
	{
		$full_name 		= $this->input->post('first_name')." ".$this->input->post('first_name')." ".$this->input->post('other_name');
		$full_name_kin 	= $this->input->post('kin_first_name')." ".$this->input->post('kin_last_name')." ".$this->input->post('kin_other_name');
		
		$member_data = array('full_name' => $full_name,
							'id_number'  => $this->input->post('id_number'),
							'phone_number' => $this->input->post('phone_number'),
							'email_address' => $this->input->post('email'),
							'dob' => $this->input->post('date'),
							'next_of_kin_name'=> $full_name_kin,
							'next_of_kin_id' => $this->input->post('kin_id_number'),
							'next_of_kin_phone' => $this->input->post('kin_phone_number'),
							'next_of_kin_email' =>  $this->input->post('kin_email'),
							'Role' => 0,
							'password' => 'joshua',
							'available_amount'=>0,
							'active' => 1);

		
		//invoke model
		$results = $this->Wamatu_model->post_data($member_data);
		// echo '<pre>';
		// print_r($results);
		redirect('createmember', 'refresh'); 
	}

	function get_members()
	{
		$data['members'] = $this->Wamatu_model->get_data();
		
		$this->load->view('nav/header');
		$this->load->view('nav/top_nav');
		$this->load->view('nav/side_nav');
		$this->load->view('nav/sub_header');
		$this->load->view('a_main/view_member', $data);
		$this->load->view('nav/footer');
		$this->load->view('modal/view_member_more');
		
	}

	function get_members_manage()
	{
		$data['members'] = $this->Wamatu_model->get_data();
		
		$this->load->view('nav/header');
		$this->load->view('nav/top_nav');
		$this->load->view('nav/side_nav');
		$this->load->view('nav/sub_header');
		$this->load->view('a_main/manage_member', $data);
		$this->load->view('nav/footer');
		
	}
}
