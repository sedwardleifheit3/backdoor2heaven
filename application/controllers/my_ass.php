<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_ass extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		echo "My ASS";
	}
}