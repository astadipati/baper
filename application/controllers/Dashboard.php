<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		gak_login();
		$this->template->load('template','dashboard');
	}
}
