<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{
	public function index()
	{
		$this->load->view('app/pelatihan');
	}
}
