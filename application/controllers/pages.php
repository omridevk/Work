<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/view_jscss');
		$this->load->view('templates/view_header');
		$this->load->view('view_pages');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */