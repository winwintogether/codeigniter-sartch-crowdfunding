<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {	
	public function index()
	{		
	   $this->load->view('Dashboard/dashboard_view');
	}

	public function show(){

		 $this->load->view('Dashboard/dashboard_view');

	}
	
}
