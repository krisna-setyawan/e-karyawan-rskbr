<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Z404 extends CI_Controller
{
	public function index()
	{
		$this->load->view('errors/z404');
	}
}
