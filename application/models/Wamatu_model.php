<?php
class Wamatu_model extends CI_Model{
	public function __construct(){
            
	     $this->load->database();
	}

	public function post_data($member_data)
	{
		$this->db->insert('members',$member_data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}

	public function get_data()
	{
		//$this->db->where('active', 1);
		$query = $this->db->get('members');
		return $query->result_array();
	}
}
?>