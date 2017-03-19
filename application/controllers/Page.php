<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	
	public function index()
	{		
	   $this->load->view('User/Home/Home_view');
	}
	public function Home()
	{		
	   $this->load->view('User/Home/Home_view');
	}
	public function login()
	{		
	   $this->load->view('User/Login/login_view');
	}
	public function signup()
	{		
	   $this->load->view('User/Signup/Signup_view');
	}
	public function collections()
	{		
	   redirect(base_url().'index.php/Collections/show');
	}
	public function aboutus()
	{		
	   $this->load->view('User/Aboutus/aboutus_view');
	}
	public function profile()
	{		
	   $this->load->view('User/Profile/profile_view');
	}
	public function buyinfo()
	{		
	   $this->load->view('User/Buyinfo/buyinfo_view');
	}
}
