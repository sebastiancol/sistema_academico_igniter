<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function index()
	{
               $this->load->model('DataBase');	
               $this->load->view('login');
		//$this->load->view('professor');
                
	}
}
