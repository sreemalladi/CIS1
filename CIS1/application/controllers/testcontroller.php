<?php 
class testcontroller extends Controller {

	function test(){
		parent::Contoller();
	}
	
	function test_getall(){
		$this->load->model('test_m');
		$data['query'] = $this->test_m->getall();

		$this->load->view('testpage', $data);
	}
	
}

?>