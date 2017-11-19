<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->model('sql_model');
		$data['person'] = $this->sql_model->select("select * from personel_info");

		$this->template->set('title', 'หน้าแรกเว็บไซต์');
		$data['age'] = 17;
        $this->template->load('template_default', 'home_view',$data);
		// $this->load->view('template_default');
	}
}

?>