<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {	
	public function index()
	{		
	  
	}

	public function show(){

		 $this->load->view('Dashboard/user_view');

	}
	
}
