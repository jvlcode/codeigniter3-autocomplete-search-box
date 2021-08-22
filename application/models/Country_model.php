<?php 

	class Country_model extends CI_Model{

		public function getCountriesByName($name){
			return $this->db->like('name',$name)->get('countries')->result_array();
		}
	}
