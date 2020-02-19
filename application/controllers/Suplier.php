<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

	public function index()
	{
		$this->template->load('template','suplier/suplier_data');
	}
}
