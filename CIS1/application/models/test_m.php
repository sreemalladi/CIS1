<?php 
class test_m extends Model{
	
	function test_m()
	{
		parent:Model();
	}
	
	function getall(){
		$this->load->database();
		$query = $this->db->get('challengedates');
		return $query->result();
	}
}
?>