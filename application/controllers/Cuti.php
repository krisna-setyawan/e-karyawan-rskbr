<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
	public function index()
	{
		$this->load->view('app/cuti');
	}
}
