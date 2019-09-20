<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('employee_view');
	}
	public function addEmployee()
	{
		# code...
		$ten = $this->input->post('name');
		$tuoi = $this->input->post('age');
		$phoneNumber = $this->input->post('phoneNumber');
		$order = $this->input->post('order');
		$linkFB = $this->input->post('linkFB');
		var_dump($ten) ;
	}

}

/* End of file employee.php */
/* Location: ./application/controllers/employee.php */