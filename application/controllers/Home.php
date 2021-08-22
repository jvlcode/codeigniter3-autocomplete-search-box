<?php 
	class Home extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('country_model');
		}
		public function index(){
			$this->load->view('home');
		}
		public function country(){
			$query = $this->input->get('query');
			$countries_data = $this->country_model->getCountriesByName($query);
			
		
			echo json_encode($countries_data);
		}
	}
