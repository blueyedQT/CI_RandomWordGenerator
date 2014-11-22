<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WordGenerator extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('count')) {
			$this->session->set_userdata('count', 1);
		} 
		$result['string'] = 'Click Button to Generate Random Word';
		$result['count'] = $this->session->userdata('count');
		$this->load->view('word_generator', $result);
	}

	public function random() 
	{
		$temp = $this->session->userdata('count');
		$temp += 1;
		$this->session->set_userdata('count', $temp);
		$result['count'] = $this->session->userdata('count');

		$char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$string = '';
		for($i=0; $i<14; $i++) {
			$string .= $char[rand(0, strlen($char) - 1)];
		}
		$this->session->set_userdata('random', $string);
		$result['string'] = $this->session->userdata('random');

		$this->load->view('word_generator', $result);
	}
}
?>