<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class About extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		
		public function index()
		{
			$this->load->view('layout_site/herder_and_nav'); 
			$this->load->view('layout_site/left');      
			$this->load->view('layout_site/about');
			$this->load->view('layout_site/right');  
			$this->load->view('layout_site/footer');         
		}
		public function about(){
			     
		}
		
		
	}
